<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kehadiran;
use App\Models\Logs;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function index() {
        $pegawais = User::get();
        return view('dasbor.kehadiran.index', compact('pegawais'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'status' => 'required',
                'keterangan' => 'required',
            ],
            [
                'nama_lengkap.required' => 'Bagian ini wajib dilengkapi',
                'keterangan.required' => 'Bagian ini wajib dilengkapi',
            ]
        );


        $data = new Logs();
        $data->status = $request->status;
        $data->keterangan = $request->keterangan;
        $data->created_at = now();
        $data->user_id = Auth::user()->id;
        $data->save();

        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);
        return redirect('dasbor');

    }

    public function edit(Request $request, $id)
    {
        $request->validate(
            [
                'status' => 'required',
                'keterangan' => 'required',
            ],
            [
                'nama_lengkap.required' => 'Bagian ini wajib dilengkapi',
                'keterangan.required' => 'Bagian ini wajib dilengkapi',
            ]
        );



        $data = Logs::Find($id);
        $data->status = $request->status;
        $data->keterangan = $request->keterangan;
        $data->save();

        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);
        return redirect('dasbor');
    }

    public function laporan()
    {
        return view('dasbor.laporan.index');
    }

    public function tahun($tahun)
    {
        $tahun = $tahun;
        return view('dasbor.pegawai.laporan.tahun', compact('tahun'));

    }

    public function bulan($tahun, $bulan)
    {
        $tahun = $tahun;
        $bulan = $bulan;
        $no = 0;
        $logs = Logs::whereYear('created_at', $tahun)
                        ->whereMonth('created_at', $bulan)
                        ->get();
        return view('dasbor.pegawai.laporan.bulan', compact('tahun','bulan', 'no', 'logs'));

    }
}
