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
                'nama' => 'Shanty Febyarti',
                'deskripsi' => 'Produk nya bagus, motifnya cantik dan kerjaan nya halus, rapi, kombinasi warna nya sesuai, harga sesuai dengan produk.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Rooney Ahmad',
                'deskripsi' => 'Batik yang khas Blimbing dan Malangan.. bahan berkualitas, desain yg kreatif, harga bersaing gaess..',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Arya Madha',
                'deskripsi' => 'Banyak pilihan warna dan motifnya serta harganya terjangkau.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Rahmat Djajadi',
                'deskripsi' => 'Home made asli loh, dibuat di rumah. Asyik lihat yg membatik. Mbatiknya pun bagus dengan harga relatif terjangkau. Inspiratif nasionalis.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Dini Thea',
                'deskripsi' => 'Tempat belajar batik khas Malangan dan belanja aneka kreasi batik Malang. Lokasinya mudah dijangkau dan pemilik melayani dengan ramah.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Idul Sapril',
                'deskripsi' => 'Di sini bagus banget, koleksi batiknya khas banget. Kalau mau belajar membatik juga bisa di sini.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Mochamad Dhany Z',
                'deskripsi' => 'Bagus untuk belajar batik. Mahasiswa asing banyak datang ke sini.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Prastya Petandra',
                'deskripsi' => 'Tempat belanja batik khas malangan, selain itu juga menyediakan pelatihan batik bagi semua kalangan yang ingin belajar membatik.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Muh Baharuddin',
                'deskripsi' => 'Di tempat ini bukan hanya produksi batik tapi bisa untuk belajar membatik dari berbagai kalangan.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'nama' => 'Wahyu Ningsih',
                'deskripsi' => 'Belajar membatik di batik blimbing.... mantap banget.',
                // 'gambar' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
        ]);
    }
}
