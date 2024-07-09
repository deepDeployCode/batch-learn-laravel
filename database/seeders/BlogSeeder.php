<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $Blogs = [
        //     [
        //         'title' => 'Manfaat Buah Pisang untuk Kesehatan',
        //         'author' => 'Fitriani Sari',
        //         'slug' => 'manfaat-buah-pisang-kesehatan',
        //         'body' => 'Buah pisang mengandung banyak nutrisi penting seperti kalium, vitamin C, dan serat. Manfaat buah pisang antara lain membantu menjaga kesehatan jantung, mengatur tekanan darah, dan meningkatkan sistem pencernaan. Selain itu, pisang juga mengandung triptofan yang dapat membantu meningkatkan mood dan mengurangi stres.'
        //     ],
        //     [
        //         'title' => 'Mengenal Bunga Matahari',
        //         'author' => 'Maria Dewi',
        //         'slug' => 'mengenal-bunga-matahari',
        //         'body' => 'Bunga matahari (Helianthus annuus) adalah tanaman berbunga yang dikenal dengan bunga besar berwarna kuning cerah dan biji yang dapat dimakan. Bunga matahari tumbuh subur di daerah beriklim hangat dan membutuhkan sinar matahari penuh. Bunga ini memiliki batang tinggi dan daun besar yang menyerupai bentuk matahari. Selain sebagai tanaman hias, biji bunga matahari juga dapat diolah menjadi minyak biji matahari yang kaya akan asam lemak tak jenuh. Minyak ini sering digunakan dalam masakan dan produk perawatan kulit.'
        //     ]
        // ];

        // foreach ($Blogs as $b) {
        //     Blog::create($b);
        // }

        // DB::table('blogs')->insert([
        //     [
        //         'title' => 'Tips Merawat Tanaman Hias di Dalam Rumah',
        //         'author' => 'Rina Wijaya',
        //         'slug' => 'merawat-tanaman-hias-rumah',
        //         'body' => 'Tanaman hias di dalam rumah memerlukan perawatan khusus agar tetap sehat dan indah. Beberapa tips merawat tanaman hias di dalam rumah antara lain menyiram dengan cukup, memberikan pupuk secara teratur, dan memastikan tanaman mendapatkan cahaya yang cukup. Selain itu, hindari meletakkan tanaman dekat dengan AC atau radiator.'
        //     ],
        //     [
        //         'title' => 'Resep Sederhana Membuat Smoothie Berenergi',
        //         'author' => 'Dian Pratiwi',
        //         'slug' => 'resep-smoothie-berenergi',
        //         'body' => 'Smoothie berenergi adalah minuman segar yang cocok untuk sarapan atau camilan. Campuran buah-buahan seperti pisang, strawberry, dan blueberry dengan yogurt dan madu akan memberikan energi dan nutrisi. Cukup blender semua bahan hingga halus, dan nikmati smoothie berenergi!'
        //     ]
        // ]);
    }
}
