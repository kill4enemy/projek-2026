<?php

namespace Database\Seeders;
use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Court::create([
            'name' => 'Lapangan 1',
            'location' => 'Tangerang',
            'description' => "✓ Outdoor\n✓ Raket pinjaman\n✓ Ruang tunggu\n✓ Area parkir",
            'price_per_hour' => 150000,
            'is_active' => true,
            'image' => 'images/Lapangan1.jpg',
        ]);

        Court::create([
            'name' => 'Lapangan 2',
            'location' => 'Tangerang',
            'description' => "✓ Outdoor\n✓ Raket pinjaman\n✓ Ruang tunggu\n✓ Area parkir",
            'price_per_hour' => 150000,
            'is_active' => true,
            'image' => 'images/Lapangan2.jpg',
        ]);

        Court::create([
            'name' => 'Lapangan VIP',
            'location' => 'Tangerang',
            'description' => "✓ Indoor\n✓ Lampu malam\n✓ Ruang tunggu\n✓ Area parkir\n ✓ Gratis 2 Pocari Botol",
            'price_per_hour' => 450000,
            'is_active' => true,
            'image' => 'images/Lapangan.jpg',
        ]);
    }
}
