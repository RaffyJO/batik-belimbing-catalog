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
                'nama' => 'Penghargaan Batik Nasional',
                'deskripsi' => 'Penghargaan untuk kontribusi luar biasa dalam pelestarian batik tradisional Indonesia.',
                'tanggal' => Carbon::parse('2024-01-15'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Anugerah Batik Kreatif',
                'deskripsi' => 'Penghargaan untuk desain batik yang inovatif dan kreatif.',
                'tanggal' => Carbon::parse('2024-02-20'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Penghargaan Pelestari Batik',
                'deskripsi' => 'Penghargaan untuk individu atau organisasi yang berdedikasi dalam melestarikan warisan batik.',
                'tanggal' => Carbon::parse('2024-03-25'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Batik Fashion Award',
                'deskripsi' => 'Penghargaan untuk koleksi busana batik terbaik tahun ini.',
                'tanggal' => Carbon::parse('2024-04-30'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Penghargaan Seniman Batik',
                'deskripsi' => 'Penghargaan untuk seniman batik dengan karya seni yang menginspirasi.',
                'tanggal' => Carbon::parse('2024-05-15'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Anugerah Batik Internasional',
                'deskripsi' => 'Penghargaan untuk promosi batik Indonesia di kancah internasional.',
                'tanggal' => Carbon::parse('2024-06-20'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Penghargaan Batik Muda',
                'deskripsi' => 'Penghargaan untuk generasi muda yang berkontribusi dalam seni batik.',
                'tanggal' => Carbon::parse('2024-07-25'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Batik Craftsmanship Award',
                'deskripsi' => 'Penghargaan untuk keterampilan dan keahlian luar biasa dalam pembuatan batik.',
                'tanggal' => Carbon::parse('2024-08-30'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Penghargaan Batik Berkelanjutan',
                'deskripsi' => 'Penghargaan untuk praktek berkelanjutan dalam produksi batik.',
                'tanggal' => Carbon::parse('2024-09-15'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
            [
                'nama' => 'Batik Innovation Award',
                'deskripsi' => 'Penghargaan untuk inovasi terbaru dalam teknik dan desain batik.',
                'tanggal' => Carbon::parse('2024-10-20'),
                'gambar' => 'uploads/awards/01J591CN30WNX1VXJXBPR612KG.jpg',
            ],
        ]);
    }
}
