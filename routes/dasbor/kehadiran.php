<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\KehadiranController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| kehadiran
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['web','auth']], function () {

    Route::controller(KehadiranController::class)->group(function(){

        // index
        Route::get('kehadiran','index');

        // simpan / save
        Route::post('kehadiran','store')->name('kehadiran.post');

        // ubah / edit
        Route::put('kehadiran/{id}','edit')->name('kehadiran.edit');

         // Laporan / report
         Route::get('laporan/kehadiran/','laporan')->name('kehadiran.laporan');;

          // TAHUN
        Route::get('laporan/kehadiran/{tahun}', 'tahun');

        // BULAN
        Route::get('laporan/kehadiran/{tahun}/{bulan}', 'bulan');

    });
});

