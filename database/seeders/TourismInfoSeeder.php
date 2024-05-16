<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourismInfo;

class TourismInfoSeeder extends Seeder
{
    public function run()
    {
        TourismInfo::create([
            'name' => 'Bali',
            'description' => 'Pulau Dewata, surga wisata di Indonesia.',
            'location' => 'Bali',
            'image_url' => 'https://example.com/bali.jpg',
        ]);

        TourismInfo::create([
            'name' => 'Yogyakarta',
            'description' => 'Kota budaya dengan banyak destinasi menarik.',
            'location' => 'Yogyakarta',
            'image_url' => 'https://example.com/yogyakarta.jpg',
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
