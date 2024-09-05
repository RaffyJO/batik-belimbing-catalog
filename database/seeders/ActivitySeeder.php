<?php

namespace Database\Seeders;

use App\Models\Activity;
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
        $activities = [
            [
                'nama' => ([
                    'en' => 'Batik Workshop',
                    'id' => 'Workshop Batik',
                ]),
                'deskripsi' => ([
                    'en' => 'A workshop on traditional batik techniques.',
                    'id' => 'Sebuah workshop tentang teknik batik tradisional.',
                ]),
                'lokasi' => 'Jakarta',
                'tanggal' => Carbon::parse('2024-08-01'),
                'gambar' => 'uploads/activities/01J590ZF1T72SQNY51W232X7VG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Art Exhibition',
                    'id' => 'Pameran Seni',
                ]),
                'deskripsi' => ([
                    'en' => 'An exhibition showcasing local art.',
                    'id' => 'Pameran yang menampilkan seni lokal.',
                ]),
                'lokasi' => 'Surabaya',
                'tanggal' => Carbon::parse('2024-08-05'),
                'gambar' => 'uploads/activities/01J59101CZ3C4QKFRGEH3Y6CC0.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Cultural Festival',
                    'id' => 'Festival Budaya',
                ]),
                'deskripsi' => ([
                    'en' => 'A festival celebrating cultural diversity.',
                    'id' => 'Festival yang merayakan keragaman budaya.',
                ]),
                'lokasi' => 'Yogyakarta',
                'tanggal' => Carbon::parse('2024-08-10'),
                'gambar' => 'uploads/activities/01J5910QY7WN9ZEF5WM9QGRGPW.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Music Concert',
                    'id' => 'Konser Musik',
                ]),
                'deskripsi' => ([
                    'en' => 'A live concert featuring local bands.',
                    'id' => 'Konser langsung menampilkan band lokal.',
                ]),
                'lokasi' => 'Bandung',
                'tanggal' => Carbon::parse('2024-08-15'),
                'gambar' => 'uploads/activities/01J5911GPCSNKDP0Y9T8MM37RW.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Food Fair',
                    'id' => 'Pameran Makanan',
                ]),
                'deskripsi' => ([
                    'en' => 'A fair showcasing local cuisine.',
                    'id' => 'Pameran yang menampilkan masakan lokal.',
                ]),
                'lokasi' => 'Bali',
                'tanggal' => Carbon::parse('2024-08-20'),
                'gambar' => 'uploads/activities/01J59122HFJPNEZ159S07RP6F3.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Historical Tour',
                    'id' => 'Tur Sejarah',
                ]),
                'deskripsi' => ([
                    'en' => 'A tour of historical landmarks.',
                    'id' => 'Tur ke landmark bersejarah.',
                ]),
                'lokasi' => 'Malang',
                'tanggal' => Carbon::parse('2024-08-25'),
                'gambar' => 'uploads/activities/01J5912NYP6DHKWXE987Q0WQKB.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Crafts Market',
                    'id' => 'Pasar Kerajinan',
                ]),
                'deskripsi' => ([
                    'en' => 'A market featuring handmade crafts.',
                    'id' => 'Pasar yang menampilkan kerajinan tangan.',
                ]),
                'lokasi' => 'Semarang',
                'tanggal' => Carbon::parse('2024-08-30'),
                'gambar' => 'uploads/activities/01J5913T3AHY5XRRWX8PCP00DE.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Photography Workshop',
                    'id' => 'Workshop Fotografi',
                ]),
                'deskripsi' => ([
                    'en' => 'A workshop on photography techniques.',
                    'id' => 'Sebuah workshop tentang teknik fotografi.',
                ]),
                'lokasi' => 'Makassar',
                'tanggal' => Carbon::parse('2024-09-05'),
                'gambar' => 'uploads/activities/01J5914CMCAG3JEZWQVF31XV53.jpg',
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}
