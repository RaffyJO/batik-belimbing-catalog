<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama' => 'Daniswara Jiwatrisna Patribrata',
                'deskripsi' => 'Batik Parang adalah salah satu motif batik klasik yang berasal dari Jawa Tengah.',
                'gambar' => 'uploads/products/01J590KHM9B8V6Q63QNE9BA9EE.jpg',
            ],
            [
                'nama' => 'Topeng Malang',
                'deskripsi' => 'Batik Kawung memiliki motif yang menyerupai buah aren yang dipotong melintang.',
                'gambar' => 'uploads/products/01J590MXF7FYXN7FSQHX9E4NYP.jpg',
            ],
            [
                'nama' => 'Gandring',
                'deskripsi' => 'Batik Mega Mendung memiliki motif awan dengan warna-warna yang mencolok.',
                'gambar' => 'uploads/products/01J590NFT98E3GDP88EX8QYZ6G.jpg',
            ],
            [
                'nama' => 'Tujuh Topeng',
                'deskripsi' => 'Batik Sekar Jagad terkenal dengan motifnya yang kompleks dan penuh warna.',
                'gambar' => 'uploads/products/01J590P361HS6MWSX2KEXX7PNK.jpg',
            ],
            [
                'nama' => 'Tugu Malang',
                'deskripsi' => 'Batik Tujuh Rupa memiliki motif yang beragam dan biasanya memiliki warna yang cerah.',
                'gambar' => 'uploads/products/01J590Q6YVCXAPMWRB9F42DQ1V.jpg',
            ],
            [
                'nama' => 'Wirasena',
                'deskripsi' => 'Batik Cendrawasih memiliki motif burung cendrawasih yang elegan.',
                'gambar' => 'uploads/products/01J590QXH20K9HV3WPG8727WE4.jpg',
            ],
            [
                'nama' => 'Ragam Warna',
                'deskripsi' => 'Batik Priyangan berasal dari daerah Priangan dan memiliki motif yang halus.',
                'gambar' => 'uploads/products/01J590RH6WKQS4XCE8W9X131ZH.jpg',
            ],
            [
                'nama' => 'Kampung Warna-warni',
                'deskripsi' => 'Batik Gentongan berasal dari Madura dan memiliki warna-warna yang cerah dan berani.',
                'gambar' => 'uploads/products/01J590S9TT8652N3HT4N654Z8D.jpg',
            ],
            [
                'nama' => 'Jiwatrisna',
                'deskripsi' => 'Batik Bali memiliki motif yang sering kali terinspirasi dari alam dan budaya Bali.',
                'gambar' => 'uploads/products/01J590SYXE0Y6ADNJ950YNVT90.jpg',
            ],
            [
                'nama' => 'Kastra Cakra Gama',
                'deskripsi' => 'Batik Belimbing memiliki motif buah belimbing yang unik dan menarik.',
                'gambar' => 'uploads/products/01J590TKJV95BM6Y47W058ACE1.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
