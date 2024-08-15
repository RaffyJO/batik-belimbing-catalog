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
                'nama' => 'Batik Workshop',
                'deskripsi' => 'A workshop on traditional batik techniques.',
                'lokasi' => 'Jakarta',
                'tanggal' => Carbon::parse('2024-08-01'),
                'gambar' => 'uploads/activities/01J590ZF1T72SQNY51W232X7VG.jpg',
            ],
            [
                'nama' => 'Art Exhibition',
                'deskripsi' => 'An exhibition showcasing local art.',
                'lokasi' => 'Surabaya',
                'tanggal' => Carbon::parse('2024-08-05'),
                'gambar' => 'uploads/activities/01J59101CZ3C4QKFRGEH3Y6CC0.jpg',
            ],
            [
                'nama' => 'Cultural Festival',
                'deskripsi' => 'A festival celebrating cultural diversity.',
                'lokasi' => 'Yogyakarta',
                'tanggal' => Carbon::parse('2024-08-10'),
                'gambar' => 'uploads/activities/01J5910QY7WN9ZEF5WM9QGRGPW.jpg',
            ],
            [
                'nama' => 'Music Concert',
                'deskripsi' => 'A live concert featuring local bands.',
                'lokasi' => 'Bandung',
                'tanggal' => Carbon::parse('2024-08-15'),
                'gambar' => 'uploads/activities/01J5911GPCSNKDP0Y9T8MM37RW.jpg',
            ],
            [
                'nama' => 'Food Fair',
                'deskripsi' => 'A fair showcasing local cuisine.',
                'lokasi' => 'Bali',
                'tanggal' => Carbon::parse('2024-08-20'),
                'gambar' => 'uploads/activities/01J59122HFJPNEZ159S07RP6F3.jpg',
            ],
            [
                'nama' => 'Historical Tour',
                'deskripsi' => 'A tour of historical landmarks.',
                'lokasi' => 'Malang',
                'tanggal' => Carbon::parse('2024-08-25'),
                'gambar' => 'uploads/activities/01J5912NYP6DHKWXE987Q0WQKB.jpg',
            ],
            [
                'nama' => 'Crafts Market',
                'deskripsi' => 'A market featuring handmade crafts.',
                'lokasi' => 'Semarang',
                'tanggal' => Carbon::parse('2024-08-30'),
                'gambar' => 'uploads/activities/01J5913T3AHY5XRRWX8PCP00DE.jpg',
            ],
            [
                'nama' => 'Photography Workshop',
                'deskripsi' => 'A workshop on photography techniques.',
                'lokasi' => 'Makassar',
                'tanggal' => Carbon::parse('2024-09-05'),
                'gambar' => 'uploads/activities/01J5914CMCAG3JEZWQVF31XV53.jpg',
            ],
        ]);
    }
}
