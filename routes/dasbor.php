<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dasbor')->middleware('auth')->group(function () {

    require_once 'dasbor/pengguna.php';
    require_once 'dasbor/pegawai.php';
    require_once 'dasbor/kehadiran.php';

});
