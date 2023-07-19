<?php

namespace App\Http\Controllers\Dasbor;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Kehadiran;

use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function index() {
        $pegawais = Pegawai::get();
        return view('dasbor.kehadiran.index', compact('pegawais'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
