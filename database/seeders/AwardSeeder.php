<?php

namespace Database\Seeders;

use App\Models\Award;
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
        $awards = [
            [
                'nama' => ([
                    'en' => 'National Batik Award',
                    'id' => 'Penghargaan Batik Nasional',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for outstanding contribution to the preservation of traditional Indonesian batik.',
                    'id' => 'Penghargaan untuk kontribusi luar biasa dalam pelestarian batik tradisional Indonesia.',
                ]),
                'tanggal' => Carbon::parse('2024-01-15'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Creative Batik Award',
                    'id' => 'Anugerah Batik Kreatif',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for innovative and creative batik designs.',
                    'id' => 'Penghargaan untuk desain batik yang inovatif dan kreatif.',
                ]),
                'tanggal' => Carbon::parse('2024-02-20'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Batik Preservation Award',
                    'id' => 'Penghargaan Pelestari Batik',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for individuals or organizations dedicated to preserving batik heritage.',
                    'id' => 'Penghargaan untuk individu atau organisasi yang berdedikasi dalam melestarikan warisan batik.',
                ]),
                'tanggal' => Carbon::parse('2024-03-25'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Batik Fashion Award',
                    'id' => 'Batik Fashion Award',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for the best batik fashion collection of the year.',
                    'id' => 'Penghargaan untuk koleksi busana batik terbaik tahun ini.',
                ]),
                'tanggal' => Carbon::parse('2024-04-30'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Batik Artist Award',
                    'id' => 'Penghargaan Seniman Batik',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for batik artists with inspiring artworks.',
                    'id' => 'Penghargaan untuk seniman batik dengan karya seni yang menginspirasi.',
                ]),
                'tanggal' => Carbon::parse('2024-05-15'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'International Batik Award',
                    'id' => 'Anugerah Batik Internasional',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for promoting Indonesian batik on the international stage.',
                    'id' => 'Penghargaan untuk promosi batik Indonesia di kancah internasional.',
                ]),
                'tanggal' => Carbon::parse('2024-06-20'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Young Batik Award',
                    'id' => 'Penghargaan Batik Muda',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for the younger generation contributing to batik art.',
                    'id' => 'Penghargaan untuk generasi muda yang berkontribusi dalam seni batik.',
                ]),
                'tanggal' => Carbon::parse('2024-07-25'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Batik Craftsmanship Award',
                    'id' => 'Batik Craftsmanship Award',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for outstanding skill and craftsmanship in batik making.',
                    'id' => 'Penghargaan untuk keterampilan dan keahlian luar biasa dalam pembuatan batik.',
                ]),
                'tanggal' => Carbon::parse('2024-08-30'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Sustainable Batik Award',
                    'id' => 'Penghargaan Batik Berkelanjutan',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for sustainable practices in batik production.',
                    'id' => 'Penghargaan untuk praktek berkelanjutan dalam produksi batik.',
                ]),
                'tanggal' => Carbon::parse('2024-09-15'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => ([
                    'en' => 'Batik Innovation Award',
                    'id' => 'Batik Innovation Award',
                ]),
                'deskripsi' => ([
                    'en' => 'Award for the latest innovations in batik techniques and designs.',
                    'id' => 'Penghargaan untuk inovasi terbaru dalam teknik dan desain batik.',
                ]),
                'tanggal' => Carbon::parse('2024-10-20'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
        ];

        foreach ($awards as $award) {
            Award::create($award);
        }
    }
}
