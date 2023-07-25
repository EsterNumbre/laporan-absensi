<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\PegawaiController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| pegawai
|--------------------------------------------------------------------------
*/

// ROLE ADMINISTRATOR
Route::group(['middleware' => ['role:administrator']], function () { 

    Route::controller(PegawaiController::class)->group(function(){

        // index
        Route::get('pegawai','index');

        // tambah
        Route::get('pegawai/tambah','create');

        // proses tambah / store
        Route::post('pegawai','store');

        // detail / show
        Route::get('pegawai/detail/{id}','show');

        // ubah / edit
        Route::get('pegawai/ubah/{id}','edit');

        // proses ubah / update
        Route::put('pegawai/{id}','update');

        // proses hapus / destroy
        Route::delete('pegawai/{id}','destroy');


    });
});

// ROLE PEGAWAI

Route::group(['middleware' => ['role:pegawai']], function () { 

    Route::controller(PegawaiController::class)->group(function(){
        
        // LAPORAN
        Route::get('pegawai/laporan/', 'laporan');

        // TAHUN
        Route::get('pegawai/laporan/{tahun}', 'tahun');

        // BULAN
        Route::get('pegawai/laporan/{tahun}/{bulan}', 'bulan');

    });
});
