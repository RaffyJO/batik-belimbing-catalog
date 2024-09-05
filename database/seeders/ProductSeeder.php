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
                'nama' => ([
                    'en' => 'Daniswara Jiwatrisna Patribrata',
                    'id' => 'Daniswara Jiwatrisna Patribrata',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Parang is one of the classic batik motifs from Central Java.',
                    'id' => 'Batik Parang adalah salah satu motif batik klasik yang berasal dari Jawa Tengah.',
                ]),
                'gambar' => 'uploads/products/01J590KHM9B8V6Q63QNE9BA9EE.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Topeng Malang',
                    'id' => 'Topeng Malang',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Kawung features a pattern resembling sliced aren fruit.',
                    'id' => 'Batik Kawung memiliki motif yang menyerupai buah aren yang dipotong melintang.',
                ]),
                'gambar' => 'uploads/products/01J590MXF7FYXN7FSQHX9E4NYP.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Gandring',
                    'id' => 'Gandring',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Mega Mendung features cloud motifs with vibrant colors.',
                    'id' => 'Batik Mega Mendung memiliki motif awan dengan warna-warna yang mencolok.',
                ]),
                'gambar' => 'uploads/products/01J590NFT98E3GDP88EX8QYZ6G.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Tujuh Topeng',
                    'id' => 'Tujuh Topeng',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Sekar Jagad is known for its complex and colorful patterns.',
                    'id' => 'Batik Sekar Jagad terkenal dengan motifnya yang kompleks dan penuh warna.',
                ]),
                'gambar' => 'uploads/products/01J590P361HS6MWSX2KEXX7PNK.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Tugu Malang',
                    'id' => 'Tugu Malang',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Tujuh Rupa features diverse motifs with bright colors.',
                    'id' => 'Batik Tujuh Rupa memiliki motif yang beragam dan biasanya memiliki warna yang cerah.',
                ]),
                'gambar' => 'uploads/products/01J590Q6YVCXAPMWRB9F42DQ1V.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Wirasena',
                    'id' => 'Wirasena',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Cendrawasih features an elegant motif of the cendrawasih bird.',
                    'id' => 'Batik Cendrawasih memiliki motif burung cendrawasih yang elegan.',
                ]),
                'gambar' => 'uploads/products/01J590QXH20K9HV3WPG8727WE4.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Ragam Warna',
                    'id' => 'Ragam Warna',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Priyangan from the Priangan region features subtle motifs.',
                    'id' => 'Batik Priyangan berasal dari daerah Priangan dan memiliki motif yang halus.',
                ]),
                'gambar' => 'uploads/products/01J590RH6WKQS4XCE8W9X131ZH.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Kampung Warna-warni',
                    'id' => 'Kampung Warna-warni',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Gentongan from Madura features bright and bold colors.',
                    'id' => 'Batik Gentongan berasal dari Madura dan memiliki warna-warna yang cerah dan berani.',
                ]),
                'gambar' => 'uploads/products/01J590S9TT8652N3HT4N654Z8D.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Jiwatrisna',
                    'id' => 'Jiwatrisna',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Bali often features nature and Balinese culture-inspired motifs.',
                    'id' => 'Batik Bali memiliki motif yang sering kali terinspirasi dari alam dan budaya Bali.',
                ]),
                'gambar' => 'uploads/products/01J590SYXE0Y6ADNJ950YNVT90.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Kastra Cakra Gama',
                    'id' => 'Kastra Cakra Gama',
                ]),
                'deskripsi' => ([
                    'en' => 'Batik Belimbing features a unique and attractive belimbing fruit motif.',
                    'id' => 'Batik Belimbing memiliki motif buah belimbing yang unik dan menarik.',
                ]),
                'gambar' => 'uploads/products/01J590TKJV95BM6Y47W058ACE1.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
