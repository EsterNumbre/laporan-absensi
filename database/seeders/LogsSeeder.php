<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Logs;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Logs::insert([
            [
                'user_id'    => 1,
                'status'        => 'Masuk',
                'created_at'        => '2023-07-01 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti rapat pegawai, dan juga beberapa agenda serta juga menyelesaikan pekerjaan.',
            ]
        ]);

        Logs::insert([
            [
                'user_id'    => 1,
                'status'        => 'Masuk',
                'created_at'        => '2023-07-02 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
            ]
        ]);

        Logs::insert([
            [
                'user_id'    => 1,
                'status'        => 'Masuk',
                'created_at'        => '2023-07-03 08:00:00',
                'keterangan' => 'Hadir di kantor untuk kerja seperti biasa.',
            ]
        ]);

        Logs::insert([
            [
                'user_id'    => 1,
                'status'        => 'Izin',
                'created_at'        => '2023-07-05 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
            ]
        ]);

        Logs::insert([
            [
                'user_id' => 1,
                'status' => 'Masuk',
                'created_at' => '2023-07-06 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
            ]
        ]);

        // USER ID = 3        

        Logs::insert([
            [
                'user_id' => 3,
                'status' => 'Masuk',
                'created_at' => '2023-07-04 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
            ]
        ]);        

        Logs::insert([
            [
                'user_id' => 3,
                'status' => 'Izin',
                'created_at' => '2023-07-05 08:00:00',
                'keterangan' => 'Saya izin karena saya ada kegiatan lain yang harus dihadiri.',
            ]
        ]);        

        Logs::insert([
            [
                'user_id' => 3,
                'status' => 'Masuk',
                'created_at' => '2023-07-06 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
            ]
        ]);      

        Logs::insert([
            [
                'user_id' => 3,
                'status' => 'Masuk',
                'created_at' => '2023-07-24 08:00:00',
                'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
            ]
        ]);  

        // Logs::insert([
        //     [
        //         'user_id' => 3,
        //         'status' => 'Masuk',
        //         'created_at' => '2023-07-25 08:00:00',
        //         'keterangan' => 'Hadir di kantor untuk mengikuti beberapa agenda dan juga menyelesaikan pekerjaan.',
        //     ]
        // ]);
    }
}
