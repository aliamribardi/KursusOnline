<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;


class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'kategoriKelas_id' => 1,
            'name' => 'Bahasa Indonesia',
            'slug' => 'bahasa-indonesia',
            'harga' => '250.000',
            'image' => 'kelas-image/baAh8YJyfK1ZY0YCv4M3DnGFgSjbHpWOL2pbM6HT.png',
        ]);

        Kelas::create([
            'kategoriKelas_id' => 1,
            'name' => 'Bahasa Inggris',
            'slug' => 'bahasa-inggris',
            'harga' => '250.000',
            'image' => 'kelas-image/eOt7kzp1gTZ9c9FVC3e4UidckaSMa5xY5CPurSzY.jpg',
        ]);

        Kelas::create([
            'kategoriKelas_id' => 2,
            'name' => 'Photoshop',
            'slug' => 'photoshop',
            'harga' => '300.000',
            'image' => 'kelas-image/2DstmHlvMg5hqtGmJcPNDjaWbaxFLGpD0PeyC1JM.jpg',
        ]);

        Kelas::create([
            'kategoriKelas_id' => 2,
            'name' => 'Illustrator',
            'slug' => 'illustrator',
            'harga' => '350.000',
            'image' => 'kelas-image/LQQweVw3NnoAe70cpyrl9kWQvuOL8oTSx1IYYa8o.jpg',
        ]);

        Kelas::create([
            'kategoriKelas_id' => 3,
            'name' => 'PHP',
            'slug' => 'php',
            'harga' => '350.000',
            'image' => 'kelas-image/fNzBhrPSrPs1cJ3XpAJ5U1wlbwAnJVERwVlGDDMT.png',
        ]);

        Kelas::create([
            'kategoriKelas_id' => 3,
            'name' => 'JavaScript',
            'slug' => 'javascript',
            'harga' => '350.000',
            'image' => 'kelas-image/At4IETa7bRVhWC7zLggFvxGYtsa4A6iWJ9ROo4pS.jpg',
        ]);
    }
}
