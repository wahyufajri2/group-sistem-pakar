<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = ["isi", "judul", "kode_depresi", "id_gambar", "url_gambar"];

    public function depresi()
    {
        return $this->belongsTo(TingkatDepresi::class, 'kode_depresi', 'kode_depresi');
    }

    public function fillTabel()
    {
        $artikel = [
            [
                "kode_depresi" => "P001",
                "url_gambar" => 'https://cdn.rri.co.id/berita/1/images/1670893995-images%20%288%29%20%2826%29.jpeg',
                "judul" => 'Gangguan Mood',
                "isi" => 'Ganggguan mood yang terjadi pada seseorang ini umumnya terjadi karena banyaknya tekanan yang menimpa dirinya dan cenderung terlarut dalam tekanan dapat meningkatkan resiko berkembangnya gangguan mood yang kemudian dapat berubah menjadi depresi terutama depresi mayor. Hal ini terbukti pada suatu penelitian yang menemukan bahwa dalam sekitar empat dari lima kasus, depresi mayor diawali oleh peristiwa kehidupan yang penuh tekanan.'
            ],
            [
                "kode_depresi" => "P002",
                "url_gambar" => 'https://imgsrv2.voi.id/H50yUFNYkKepzsHtXKJJzNWe6DQFeEl7v2QaSzGh8ss/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8yNzgyNjEvMjAyMzA1MDgxNDAyLW1haW4uY3JvcHBlZF8xNjgzNTI5MzY0LmpwZw.jpg',
                "judul" => 'Depresi Minor / Depresi Ringan',
                "isi" => 'Depresi ringan ini di identikkan dengan depresi minor yang merupakan perasaan melankolis yang berlangsung sebentar dan disebabkan oleh sebuah kejadian yang tragis atau mengandung ancaman, atau kehilangan sesuatu yang penting dalam kehidupan si penderita (Meier, 2000: 20-21). Orang dengan depresi ringan ini setidaknya memiliki 2 dari gejala lainnya dan 2-3 dari gejala utama. (Maslim, 2003, 64).'
            ],
            [
                "kode_depresi" => "P003",
                "url_gambar" => 'https://4.bp.blogspot.com/-UI0aH3SXmmg/XE6UzBVTa0I/AAAAAAAADsI/2A6GJvmvlXkX-W1lL4yU2Jee1jRozyGhwCLcBGAs/s1600/alone-boy-child-256658.jpg',
                "judul" => 'Depresi Sedang',
                "isi" => 'Depresi sedang ini di alami oleh penderita selama kurang 2 minggu, dan orang dengan depresi sedang ini mengalami kesulitan nyata untuk meneruskan kegiatan social, pekerjaan dan urusan rumah tangga. Orang dengan depresi sedang ini setidaknya memiliki 2-3 dari gejala utama dan 3-4 dari gejala lainnya (Maslim,  2003: 64).'
            ],
            [
                "kode_depresi" => "P004",
                "url_gambar" => 'https://www.ai-care.id/photos/Penyakit/63be35b09f28f.jpg',
                "judul" => 'Depresi mayor / Depresi Berat',
                "isi" => 'Depresi mayor merupakan salah satu gangguan yang prevalensinya paling tinggi di antara berbagai gangguan (Davidson, 2006: 374). Depresi mayor adalah kemurungan yang dalam dan menyebar luas. Perasaan murung ini mampu menyedot semangat dan energy serta menyelubungi kehidupan si penderita seperti asap yang tebak dan menyesakkan dada. Depresi mayor ini dapat berlangsung cukup lama mulai dari empat belas hari sampai beberapa tahun. Hal ini menyebabkan penderita akan sangat sulit utnuk berfungsi dengan baik di lingkungannya. Orang dengan depresi mayor ini juga terkadang disertai dengan keinginan untuk bunuh diri atau bahkan keinginan untuk mati. Orang yang sangat tertekan, mereka akan mengalami dampak hal-hal yang mengganggu kejiwaan mereka seperti gila, paranoia atau halusinasi pendengaran (Meier, 2000: 25-26).'
            ]
        ];
        return $artikel;
    }
}
