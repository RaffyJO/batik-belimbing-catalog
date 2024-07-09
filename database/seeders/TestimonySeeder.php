<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonies')->insert([
            [
                'name' => 'Adi Nugroho',
                'description' => 'Saya sangat kagum dengan keindahan dan keragaman motif batik. Setiap potong batik memiliki cerita yang unik.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Siti Aminah',
                'description' => 'Batik adalah warisan budaya yang harus kita lestarikan. Saya bangga mengenakan batik di setiap kesempatan.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Dewi Lestari',
                'description' => 'Kualitas batik dari daerah saya sangat luar biasa. Saya selalu mendapat pujian saat mengenakan batik.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Budi Santoso',
                'description' => 'Proses pembuatan batik yang rumit membuat saya semakin menghargai setiap karya batik yang ada.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Lina Susanti',
                'description' => 'Saya selalu memilih batik sebagai pakaian resmi. Batik membuat saya merasa lebih anggun dan elegan.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Agus Wijaya',
                'description' => 'Batik adalah seni yang sangat kaya akan nilai budaya. Saya berharap generasi muda terus melestarikannya.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Ratna Dewi',
                'description' => 'Motif batik yang saya kenakan selalu menjadi pusat perhatian. Saya merasa istimewa saat mengenakannya.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Teguh Prasetyo',
                'description' => 'Saya sangat menghargai usaha para pengrajin batik. Mereka adalah pahlawan yang menjaga tradisi kita.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Maya Sari',
                'description' => 'Batik bukan hanya sekedar kain, tapi juga identitas bangsa kita. Saya bangga menjadi bagian dari budaya batik.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Irwan Saputra',
                'description' => 'Setiap kali saya memakai batik, saya merasa lebih dekat dengan akar budaya saya. Batik adalah kebanggaan kita.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
        ]);
    }
}
