<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('awards')->insert([
            [
                'name' => 'Penghargaan Batik Nasional',
                'description' => 'Penghargaan untuk kontribusi luar biasa dalam pelestarian batik tradisional Indonesia.',
                'date' => Carbon::parse('2024-01-15'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Anugerah Batik Kreatif',
                'description' => 'Penghargaan untuk desain batik yang inovatif dan kreatif.',
                'date' => Carbon::parse('2024-02-20'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Penghargaan Pelestari Batik',
                'description' => 'Penghargaan untuk individu atau organisasi yang berdedikasi dalam melestarikan warisan batik.',
                'date' => Carbon::parse('2024-03-25'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Fashion Award',
                'description' => 'Penghargaan untuk koleksi busana batik terbaik tahun ini.',
                'date' => Carbon::parse('2024-04-30'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Penghargaan Seniman Batik',
                'description' => 'Penghargaan untuk seniman batik dengan karya seni yang menginspirasi.',
                'date' => Carbon::parse('2024-05-15'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Anugerah Batik Internasional',
                'description' => 'Penghargaan untuk promosi batik Indonesia di kancah internasional.',
                'date' => Carbon::parse('2024-06-20'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Penghargaan Batik Muda',
                'description' => 'Penghargaan untuk generasi muda yang berkontribusi dalam seni batik.',
                'date' => Carbon::parse('2024-07-25'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Craftsmanship Award',
                'description' => 'Penghargaan untuk keterampilan dan keahlian luar biasa dalam pembuatan batik.',
                'date' => Carbon::parse('2024-08-30'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Penghargaan Batik Berkelanjutan',
                'description' => 'Penghargaan untuk praktek berkelanjutan dalam produksi batik.',
                'date' => Carbon::parse('2024-09-15'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Innovation Award',
                'description' => 'Penghargaan untuk inovasi terbaru dalam teknik dan desain batik.',
                'date' => Carbon::parse('2024-10-20'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
        ]);
    }
}
