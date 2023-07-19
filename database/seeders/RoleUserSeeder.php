<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Str;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()['cache']->forget('spatie.permission.cache');

        // ROLE : ADMIN
        $adminRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'administrator',
            'display_name' => 'Administrator',
        ]);

        /*
        | ==========================================
        | CREATING USERS
        | ==========================================
        */

        // ADMIN
        $adminEsterNumbre = User::create([
            'nama_lengkap' => 'Ester Numbre',
            'slug' => 'ester-numbre',
            'foto_profil' => 'ester-numbre-200x200.jpg',
            'email' => 'ester.numbre@gmail.com',
            'password' => bcrypt('ester.numbre@gmail.com'),
            'status' => 'Publish',
        ]);
        $adminEsterNumbre->assignRole($adminRole);







    }
}
