<?php

namespace Database\Seeders;

use App\Models\Testimony;
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
        $testimonies = [
            [
                'nama' => ([
                    'en' => 'Shanty Febyarti',
                    'id' => 'Shanty Febyarti',
                ]),
                'deskripsi' => ([
                    'en' => 'The product is good, the motif is beautiful and the workmanship is fine, neat, the color combination is right, and the price is suitable for the product.',
                    'id' => 'Produk nya bagus, motifnya cantik dan kerjaan nya halus, rapi, kombinasi warna nya sesuai, harga sesuai dengan produk.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Rooney Ahmad',
                    'id' => 'Rooney Ahmad',
                ]),
                'deskripsi' => ([
                    'en' => 'Distinctive Blimbing and Malangan batik. High-quality materials, creative designs, competitive prices.',
                    'id' => 'Batik yang khas Blimbing dan Malangan.. bahan berkualitas, desain yg kreatif, harga bersaing gaess..',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Arya Madha',
                    'id' => 'Arya Madha',
                ]),
                'deskripsi' => ([
                    'en' => 'A lot of color choices and motifs, and affordable prices.',
                    'id' => 'Banyak pilihan warna dan motifnya serta harganya terjangkau.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Rahmat Djajadi',
                    'id' => 'Rahmat Djajadi',
                ]),
                'deskripsi' => ([
                    'en' => 'Genuine home-made, made at home. It’s great to see batik making. The batik-making is good with relatively affordable prices. Inspirational nationalist.',
                    'id' => 'Home made asli loh, dibuat di rumah. Asyik lihat yg membatik. Mbatiknya pun bagus dengan harga relatif terjangkau. Inspiratif nasionalis.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Dini Thea',
                    'id' => 'Dini Thea',
                ]),
                'deskripsi' => ([
                    'en' => 'A place to learn Malangan batik and shop for various batik creations from Malang. The location is easily accessible and the owner is friendly.',
                    'id' => 'Tempat belajar batik khas Malangan dan belanja aneka kreasi batik Malang. Lokasinya mudah dijangkau dan pemilik melayani dengan ramah.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Idul Sapril',
                    'id' => 'Idul Sapril',
                ]),
                'deskripsi' => ([
                    'en' => 'Here is very good, the batik collection is very distinctive. You can also learn batik here.',
                    'id' => 'Di sini bagus banget, koleksi batiknya khas banget. Kalau mau belajar membatik juga bisa di sini.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Mochamad Dhany Z',
                    'id' => 'Mochamad Dhany Z',
                ]),
                'deskripsi' => ([
                    'en' => 'Good for learning batik. Many foreign students come here.',
                    'id' => 'Bagus untuk belajar batik. Mahasiswa asing banyak datang ke sini.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Prastya Petandra',
                    'id' => 'Prastya Petandra',
                ]),
                'deskripsi' => ([
                    'en' => 'A place to shop for Malangan batik and also offers batik training for everyone who wants to learn batik.',
                    'id' => 'Tempat belanja batik khas malangan, selain itu juga menyediakan pelatihan batik bagi semua kalangan yang ingin belajar membatik.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Muh Baharuddin',
                    'id' => 'Muh Baharuddin',
                ]),
                'deskripsi' => ([
                    'en' => 'At this place, not only batik production but also batik learning for various groups.',
                    'id' => 'Di tempat ini bukan hanya produksi batik tapi bisa untuk belajar membatik dari berbagai kalangan.',
                ]),
            ],
            [
                'nama' => ([
                    'en' => 'Wahyu Ningsih',
                    'id' => 'Wahyu Ningsih',
                ]),
                'deskripsi' => ([
                    'en' => 'Learn batik at Batik Blimbing... really great.',
                    'id' => 'Belajar membatik di batik blimbing.... mantap banget.',
                ]),
            ],
        ];

        foreach ($testimonies as $testimoni) {
            Testimony::create($testimoni);
        }
    }
}
