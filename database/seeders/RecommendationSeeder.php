<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recommendation;

class RecommendationSeeder extends Seeder
{
    public function run()
    {
        Recommendation::create([
            'name' => 'Gunung Bromo',
            'description' => 'Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur.',
            'category' => 'mountain',
            'image_url' => 'https://example.com/bromo.jpg',
        ]);

        Recommendation::create([
            'name' => 'Pantai Kuta',
            'description' => 'Pantai Kuta adalah sebuah pantai yang sangat terkenal di Bali.',
            'category' => 'beach',
            'image_url' => 'https://example.com/kuta.jpg',
        ]);

        Recommendation::create([
            'name' => 'Monas',
            'description' => 'Monumen Nasional (Monas) adalah ikon Jakarta.',
            'category' => 'city',
            'image_url' => 'https://example.com/monas.jpg',
        ]);
    }
}
