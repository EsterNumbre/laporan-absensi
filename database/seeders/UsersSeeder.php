<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'nama_lengkap' => 'Ester Numbre',
                'slug' => 'ester-numbre',
                'foto_profil' => 'ester-numbre-200x200.jpg',
                'email' => 'ester.numbre@gmail.com',
                'password' => bcrypt('ester.numbre@gmail.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => now(),
                'role' => 'administrator',
            ],
            [
                'nama_lengkap' => 'Joy',
                'nip' => '19210',
                'no_hp' => '081212121212',
                'slug' => 'joy',
                'foto_profil' => '00.jpg',
                'email' => 'joy@gmail.com',
                'password' => bcrypt('joy@gmail.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => now(),
                'role' => 'pegawai',
            ],
            [
                'nama_lengkap' => 'Melan T.',
                'nip' => '12 345 678910',
                'no_hp' => '08217878675',
                'email' => 'melan@gmail.com',
                'password' => bcrypt('melan@gmail.com'),
                'foto_profil' => 'melan.jpg',
                'deskripsi' => 'Profil pegawai . . .',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => now(),
                'role' => 'pegawai',
            ],
            [
                'nama_lengkap' => 'Samuel B.',
                'nip' => '12 345 678911',
                'no_hp' => '082178786755',
                'email' => 'samuel@gmail.com',
                'foto_profil' => '00.jpg',
                'deskripsi' => 'Profil pegawai . . .',
                'password' => bcrypt('samuel@gmail.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => now(),
                'role' => 'pegawai',
            ],
            [
                'nama_lengkap' => 'Ellyakim A.',
                'nip' => '12 345 678912',
                'no_hp' => '082178786756',
                'email' => 'elly@gmail.com',
                'foto_profil' => 'elly.jpg',
                'deskripsi' => 'Profil pegawai . . .',
                'password' => bcrypt('elly@gmail.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => now(),
                'role' => 'pegawai',
            ],
            [
                'nama_lengkap' => 'Septemina W.',
                'nip' => '12 345 678913',
                'no_hp' => '082178786757',
                'email' => 'septemina@gmail.com',
                'foto_profil' => 'septemina.jpg',
                'deskripsi' => 'Profil pegawai . . .',
                'password' => bcrypt('septemina@gmail.com'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => now(),
                'role' => 'pegawai',
            ]
        ]);

        $users->map(function ($user) {
            $user = collect($user);
            $newUser = User::create($user->except('role')->toArray());
            $newUser->assignRole($user['role']);
        });
    }
}
