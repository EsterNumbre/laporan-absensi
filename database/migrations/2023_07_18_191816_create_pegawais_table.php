<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();

            $table->string('nama_lengkap')->nullable();
            $table->string('nip')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('foto_profil')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('alamat_email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
};
