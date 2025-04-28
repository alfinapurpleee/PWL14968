<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    private $movies;

    public function __construct()
    {
        $this->movies = [
            [
                'id' => 1,
                'title' => 'Frozen',
                'description' => 'Film Disney tentang dua putri kerajaan, Elsa yang memiliki kekuatan es dan adiknya Anna yang berjuang untuk menyelamatkan kerajaan dari musim dingin abadi.',
                'release_date' => '2013-11-27',
                'rating' => 7.4,
                'urlImage' => 'https://image.tmdb.org/t/p/w500/kgwjIb2JDHRhNk13lmSxiClFjVk.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Mulan',
                'description' => 'Berdasarkan legenda Tiongkok kuno, Mulan menyamar sebagai pria untuk menggantikan ayahnya yang sakit dalam wajib militer melawan pasukan Hun.',
                'release_date' => '1998-06-19',
                'rating' => 7.6,
                'urlImage' => 'https://i1.sndcdn.com/artworks-7wYsfheS9rgyXF1c-ENWGeA-t500x500.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Moana',
                'description' => 'Putri kepala suku Polinesia yang dipilih oleh lautan untuk mengembalikan jantung Te Fiti dengan bantuan dewa semi-dewa Maui.',
                'release_date' => '2016-11-23',
                'rating' => 7.7,
                'urlImage' => 'https://image.tmdb.org/t/p/w500/4JeejGugONWpJkbnvL12hVoYEDa.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Brave',
                'description' => 'Cerita tentang Putri Merida dari klan Skotlandia yang menentang tradisi dan secara tidak sengaja mengubah ibunya menjadi beruang.',
                'release_date' => '2012-06-22',
                'rating' => 7.1,
                'urlImage' => 'https://i.pinimg.com/736x/fe/c3/da/fec3da7e562d1cffbd160db52e7c9d8f.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Tangled',
                'description' => 'Versi modern dari kisah Rapunzel, gadis dengan rambut ajaib yang sangat panjang yang telah dikurung di menara oleh seorang penyihir.',
                'release_date' => '2010-11-24',
                'rating' => 7.7,
                'urlImage' => 'https://image.tmdb.org/t/p/w500/ym7Kst6a4uodryxqbGOxmewF235.jpg'
            ],
            [
                'id' => 6,
                'title' => 'The Little Mermaid',
                'description' => 'Kisah tentang Ariel, putri duyung yang bermimpi hidup di daratan dan jatuh cinta pada pangeran manusia.',
                'release_date' => '1989-11-17',
                'rating' => 7.6,
                'urlImage' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSChiFwkB6PETZHapxrMe44ceaxMIXWS5siDQ&s'
            ],
            [
                'id' => 7,
                'title' => 'Beauty and the Beast',
                'description' => 'Belle, gadis muda yang cantik dan cerdas, menjadi tawanan Beast di istananya dan belajar untuk mencintai makhluk di balik penampilannya.',
                'release_date' => '1991-11-22',
                'rating' => 8.0,
                'urlImage' => 'https://m.media-amazon.com/images/I/71EhP0ANxrL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'id' => 8,
                'title' => 'Encanto',
                'description' => 'Kisah keluarga Madrigal yang tinggal di rumah ajaib di pegunungan Kolombia, dengan fokus pada Mirabel yang merupakan satu-satunya anggota keluarga tanpa kekuatan magis.',
                'release_date' => '2021-11-24',
                'rating' => 7.2,
                'urlImage' => 'https://image.tmdb.org/t/p/w500/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg'
            ],
            [
                'id' => 9,
                'title' => 'Turning Red',
                'description' => 'Kisah tentang Mei Lee, gadis 13 tahun yang berubah menjadi panda merah raksasa setiap kali dia terlalu bersemangat atau stres.',
                'release_date' => '2022-03-11',
                'rating' => 7.0,
                'urlImage' => 'https://image.tmdb.org/t/p/w500/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg'
            ],
            [
                'id' => 10,
                'title' => 'Spirited Away',
                'description' => 'Film anime Jepang tentang Chihiro, gadis berusia 10 tahun yang terjebak di dunia roh dan harus bekerja untuk membebaskan orang tuanya yang telah diubah menjadi babi.',
                'release_date' => '2001-07-20',
                'rating' => 8.6,
                'urlImage' => 'https://image.tmdb.org/t/p/w500/39wmItIWsg5sZMyRUHLkWBcuVCM.jpg'
            ]
        ];
    }

    public function admin()
    {
        if (session()->get('sudah_masuk') != true) {
            return redirect()->to('/');
        }

        if (session()->get('role') != 'Admin') {
            return redirect()->to('/user');
        }

        return view('dashboard/admin', [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
            'movies' => $this->movies,
        ]);
    }

    public function user()
    {
        if (session()->get('sudah_masuk') != true) {
            return redirect()->to('/');
        }

        if (session()->get('role') != 'User') {
            return redirect()->to('/admin');
        }

        return view('dashboard/user', [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
            'movies' => $this->movies,
        ]);
    }
}
