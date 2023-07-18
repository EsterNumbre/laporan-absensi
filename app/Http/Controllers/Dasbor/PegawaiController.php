<?php

namespace App\Http\Controllers\Dasbor;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
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
        $datas = Pegawai::where([
            ['nama_lengkap', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_lengkap', 'LIKE', '%' . $s . '%')->get();
                }
            }]
        ])->orderBy('nama_lengkap', 'asc')->paginate(5);
        $jumlahtrash = Pegawai::count();

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
            ],
            [
                'nama_lengkap.required' => 'Bagian ini wajib dilengkapi',
            ]
        );

        $data = new Pegawai();

        // biography
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nip = $request->nip;
        $data->no_hp = $request->no_hp;
        $data->deskripsi = $request->deskripsi;
        $data->email = $request->email;

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

        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor/pegawai/detail/' . Pegawai::find($data->id)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pegawai::where('id', $id)->first();
        return view('dasbor.pegawai.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        echo "destroy";
    }
}
