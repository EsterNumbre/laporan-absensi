<?php

namespace App\Http\Controllers\Dasbor;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::whereHas('roles',function($q){
            $q->where('name','pegawai');
        })->where([
            ['nama_lengkap', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_lengkap', 'LIKE', '%' . $s . '%')->get();
                }
            }]
        ])->orderBy('nama_lengkap', 'asc')->paginate(5);

        return view('dasbor.pegawai.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.pegawai.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'nama_lengkap' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:password_confirmation',
            ],
            [
                'nama_lengkap.required' => 'Bagian ini wajib dilengkapi',
                'email.required' => 'Bagian ini wajib dilengkapi',
                'email.email' => 'Alamat email tidak sesuai format',
                'email.unique' => 'Alamat email sudah terdaftar',
                'password.required' => 'Kata sandi tidak boleh kosong',
                'password.same' => 'Kata sandi tidak sama',
            ]
        );

        $data = new User();

        // biography
        $data->nama_lengkap = $request->nama_lengkap;
        $data->email = $request->email;
        $data->email_verified_at = now();
        $data->nip = $request->nip;
        $data->no_hp = $request->no_hp;
        $data->deskripsi = $request->deskripsi;
        $data->password = bcrypt($request->password);

        // foto profil creation
        if (isset($request->foto_profil)) {

            // create file name
            $fileName = $request->foto_profil->getClientOriginalName();

            // crate file path
            $path = public_path('assets/img/pegawai/' . $data->foto_profil);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->foto_profil = $fileName;

            // move file into folder path with the file name
            $request->foto_profil->move(public_path('assets/img/pegawai'), $fileName);
        }

        $data->assignRole('pegawai');
        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor/pegawai/detail/' . User::find($data->id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id', $id)->first();
        return view('dasbor.pegawai.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('dasbor.pegawai.ubah', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate(
            [
                'nama_lengkap' => 'required',
            ],
            [
                'nama_lengkap.required' => 'Bagian ini wajib dilengkapi',
            ]
        );

        $data = User::find($id);

        // biography
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nip = $request->nip;
        $data->no_hp = $request->no_hp;
        $data->deskripsi = $request->deskripsi;

        // foto profil creation
        if (isset($request->foto_profil)) {

            // create file name
            $fileName = $request->foto_profil->getClientOriginalName();

            // crate file path
            $path = public_path('assets/img/pegawai/' . $data->foto_profil);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $data->foto_profil = $fileName;

            // move file into folder path with the file name
            $request->foto_profil->move(public_path('assets/img/pegawai'), $fileName);
        }

        // melakukan proses ubah atau update
        $data->update();

        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect('dasbor/pegawai/detail/' . User::find($data->id)->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $path = public_path('assets/img/pegawai/' . $data->foto_profil);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Terhapus!', 'Data sudah terhapus.')->autoclose(1100);
        return redirect()->back();
    }
}
