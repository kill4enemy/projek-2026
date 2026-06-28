<?php

namespace Database\Seeders;
use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::create([
            'title' => 'Tentang Hans Padel',
            'description' => 'Hans Padel adalah sistem informasi penyewaan lapangan padel berbasis web yang membantu pengguna melihat lapangan, mengecek jadwal, dan melakukan booking secara online dengan lebih mudah. Projek ini dibuat untuk syarat dan kebutuhan untuk tugas akhir Mata Kuliah Pemrograman Web.',
            'image' => 'images/About.jpg',
            'is_active' => true,
        ]);
    }
}
