<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pegawai;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        // ROLE : PEGAWAI
        $pegawaiRole = Role::create(
            [
                'guard_name' => 'web',
                'name' => 'pegawai',
                'display_name' => 'Pegawai',
            ]
        );        

        // Pegawai
        $pegawaiUser = User::create(
            [
                'nama_lengkap' => 'Pegawai Contoh',
                'slug' => 'pegawai-contoh',
                'foto_profil' => '00.jpg',
                'email' => 'pegawai.contoh@gmail.com',
                'password' => bcrypt('pegawai.contoh@gmail.com'),
                'status' => 'Publish',
            ]
        );
        $pegawaiUser->assignRole($pegawaiRole);        

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
