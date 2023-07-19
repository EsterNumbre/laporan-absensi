<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\KehadiranController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| kehadiran
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['role:administrator']], function () { 

    Route::controller(KehadiranController::class)->group(function(){

        // index
        Route::get('kehadiran','index');

    });
});
