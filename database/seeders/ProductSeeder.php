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
                'name' => 'Batik Parang',
                'description' => 'Batik Parang adalah salah satu motif batik klasik yang berasal dari Jawa Tengah.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Kawung',
                'description' => 'Batik Kawung memiliki motif yang menyerupai buah aren yang dipotong melintang.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Mega Mendung',
                'description' => 'Batik Mega Mendung memiliki motif awan dengan warna-warna yang mencolok.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Sekar Jagad',
                'description' => 'Batik Sekar Jagad terkenal dengan motifnya yang kompleks dan penuh warna.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Tujuh Rupa',
                'description' => 'Batik Tujuh Rupa memiliki motif yang beragam dan biasanya memiliki warna yang cerah.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Cendrawasih',
                'description' => 'Batik Cendrawasih memiliki motif burung cendrawasih yang elegan.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Priyangan',
                'description' => 'Batik Priyangan berasal dari daerah Priangan dan memiliki motif yang halus.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Gentongan',
                'description' => 'Batik Gentongan berasal dari Madura dan memiliki warna-warna yang cerah dan berani.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Bali',
                'description' => 'Batik Bali memiliki motif yang sering kali terinspirasi dari alam dan budaya Bali.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Batik Belimbing',
                'description' => 'Batik Belimbing memiliki motif buah belimbing yang unik dan menarik.',
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
