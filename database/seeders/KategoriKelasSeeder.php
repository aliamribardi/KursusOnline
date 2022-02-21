<?php

namespace Database\Seeders;

use App\Models\KategoriKelas;
use Illuminate\Database\Seeder;

class KategoriKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriKelas::create([
            'name' => 'Bahasa',
            'slug' => 'bahasa',
            'image' => 'kategoriKelas-image/APsVedunu8Dmh8qR6JFUPaoNW2KMxy4PWspBGQ1b.jpg',
        ]);

        KategoriKelas::create([
            'name' => 'Desain Grafis',
            'slug' => 'desain-grafis',
            'image' => 'kategoriKelas-image/5yxblyCbohZV4fB2qdA44PfHF7sltR2Zoptle8kY.jpg',
        ]);

        KategoriKelas::create([
            'name' => 'Pemprograman',
            'slug' => 'pemprograman',
            'image' => 'kategoriKelas-image/UsipHQQkerQCmn1BbISc3BcIh38jTVGKtHlyvzk3.png',
        ]);
    }
}
