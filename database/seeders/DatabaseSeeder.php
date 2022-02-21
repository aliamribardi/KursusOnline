<?php

namespace Database\Seeders;

use App\Models\KategoriKelas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            KategoriKelasSeeder::class,
            KelasSeeder::class,
        ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        // ===========================

        $admin = User::create([
            'name' => 'Aliamri',
            'email' => 'aliamri@gmail.com',
            'password' => bcrypt('aliamrib')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('userbaru')
        ]);

        $user->assignRole('user');



    }
}
