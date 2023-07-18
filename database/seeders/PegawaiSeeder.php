<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::create(
            [

                'nama_lengkap' => 'Melan T.',
                'nip' => '12 345 678910',
                'no_hp' => '082178786756',
                'alamat_email' => 'melan@gmail.com',
                'foto_profil' => 'melan.jpg',
                'deskripsi' => 'Profil pegawai . . .',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Pegawai::create(
            [

                'nama_lengkap' => 'Samuel B.',
                'nip' => '12 345 678910',
                'no_hp' => '082178786756',
                'alamat_email' => 'samuel@gmail.com',
                'foto_profil' => 'samuel.jpg',
                'deskripsi' => 'Profil pegawai . . .',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Pegawai::create(
            [

                'nama_lengkap' => 'Ellyakim A.',
                'nip' => '12 345 678910',
                'no_hp' => '082178786756',
                'alamat_email' => 'elly@gmail.com',
                'foto_profil' => 'elly.jpg',
                'deskripsi' => 'Profil pegawai . . .',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Pegawai::create(
            [

                'nama_lengkap' => 'Septemina W.',
                'nip' => '12 345 678910',
                'no_hp' => '082178786756',
                'alamat_email' => 'septemina@gmail.com',
                'foto_profil' => 'septemina.jpg',
                'deskripsi' => 'Profil pegawai . . .',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}
