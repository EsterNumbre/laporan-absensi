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

        // FOLE : ADMIN
        $adminRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'administrator',
            'display_name' => 'Administrator',
        ]);

        // ROLE : GUEST
        $guestRole = Role::create(
            [
            'guard_name' => 'web',
            'name' => 'guest',
            'display_name' => 'Guest',
        ]);

        /*
        | ==========================================
        | CREATING USERS
        | ==========================================
        */

        // ADMIN
        $adminEsterNumbre = User::create([
            'name' => 'Ester Numbre',
            'slug' => 'ester-numbre',
            'job_title' => 'Information System Student',
            'picture' => 'ester-numbre-200x200.jpg',
            'email' => 'ester.numbre@gmail.com',
            'password' => bcrypt('ester.numbre@gmail.com'),
            'status' => 'Publish',
        ]);
        $adminEsterNumbre->assignRole($adminRole);

        // GUEST
        $guestUser = User::create([
            'name' => 'Guest 1',
            'slug' => 'guest-1',
            'job_title' => 'Just a guest here',
            'picture' => '00.jpg',
            'email' => 'guest1@gmail.com',
            'password' => bcrypt('guest1@gmail.com'),
            'status' => 'Publish',
        ]);
        $guestUser->assignRole($guestRole);







    }
}
