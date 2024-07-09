<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activities')->insert([
            [
                'name' => 'Batik Workshop',
                'description' => 'A workshop on traditional batik techniques.',
                'location' => 'Jakarta',
                'date' => Carbon::parse('2024-08-01'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Art Exhibition',
                'description' => 'An exhibition showcasing local art.',
                'location' => 'Surabaya',
                'date' => Carbon::parse('2024-08-05'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Cultural Festival',
                'description' => 'A festival celebrating cultural diversity.',
                'location' => 'Yogyakarta',
                'date' => Carbon::parse('2024-08-10'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Music Concert',
                'description' => 'A live concert featuring local bands.',
                'location' => 'Bandung',
                'date' => Carbon::parse('2024-08-15'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Food Fair',
                'description' => 'A fair showcasing local cuisine.',
                'location' => 'Bali',
                'date' => Carbon::parse('2024-08-20'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Historical Tour',
                'description' => 'A tour of historical landmarks.',
                'location' => 'Malang',
                'date' => Carbon::parse('2024-08-25'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Crafts Market',
                'description' => 'A market featuring handmade crafts.',
                'location' => 'Semarang',
                'date' => Carbon::parse('2024-08-30'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Photography Workshop',
                'description' => 'A workshop on photography techniques.',
                'location' => 'Makassar',
                'date' => Carbon::parse('2024-09-05'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Dance Performance',
                'description' => 'A performance showcasing traditional dance.',
                'location' => 'Medan',
                'date' => Carbon::parse('2024-09-10'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
            [
                'name' => 'Literature Reading',
                'description' => 'A reading session of local literature.',
                'location' => 'Palembang',
                'date' => Carbon::parse('2024-09-15'),
                'image' => 'uploads/products/01J2BPEQ3ZXC63P52ZE4CM9FHY.jpg',
            ],
        ]);
    }
}
