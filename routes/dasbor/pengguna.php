<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\UserController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | pengguna
    |
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(UserController::class)->group(function(){

            // index
            Route::get('pengguna','index')
                ->name('dasbor.pengguna');

            // create / tambah
            Route::get('pengguna/tambah','create')
                ->name('dasbor.pengguna.tambah');

            // store
            Route::post('pengguna','store')
                ->name('dasbor.pengguna.store');

            // show / detail
            Route::get('pengguna/{slug}/detail','show')
                ->name('dasbor.pengguna.detail');

            // edit / ubah
            Route::get('pengguna/{slug}/ubah','edit')
                ->name('dasbor.pengguna.ubah');

            // update
            Route::put('pengguna/{id}','update')
                ->name('dasbor.pengguna.update');

            // destroy
            Route::delete('pengguna/{id}','destroy')
                ->name('dasbor.pengguna.destroy');

        });
    });
