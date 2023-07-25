<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Logs;

class DasborController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            return view('dasbor.index');

        } elseif(Auth::user()->hasRole('pegawai')){

            $no = 0;
            $logs = Logs::where('user_id', Auth::user()->id)
                        ->whereYear('created_at', now()->format('Y'))
                        ->whereMonth('created_at', now()->format('m'))
                        ->orderBy('created_at', 'desc')
                        ->get();
            
            $todayLog = Logs::where('user_id', Auth::user()->id)
                        ->whereYear('created_at', now()->format('Y'))
                        ->whereMonth('created_at', now()->format('m'))
                        ->whereDay('created_at', now()->format('d'))
                        ->first();

            return view('dasbor.index', compact('no', 'logs', 'todayLog'));
        }
    }
}
