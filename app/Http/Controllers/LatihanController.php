<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function hallo()
    {
        $f = 1;
        $total = $f * 100;

        if ($total >= 1000) {
            return 'lebih dari seribu';
        } else {
            return 'kurang lebih dari seribu';
        }
    }
    public function profile()
    {
        return view('profile');
    }
    public function facebook($perkalian, $nama)
    {
        $calc = 1 + 5;
        $hasil = $calc * $perkalian;
        return view('about', compact('perkalian', 'nama', 'hasil'));
    }
    public function siswa()
    {
        $a = [
            ['id' => 1, 'name' => 'abdul', 'umur' => 18, 'hobi' => [
                'membaca novel', 'bernyanyi', 'bermain',
            ]],
            ['id' => 2, 'name' => 'kiki', 'umur' => 12, 'hobi' => [
                'bola', 'nonton', 'catur',
            ]],
        ];

        // if ($a['umur']>= 0 && $a['age']<=16) {
        //     $text='maka boleh punya sim';
        // }else
        //     $text='maka belum boleh punya sim';
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function badan($beratbadan, $tinggi, $umur)
    {
        $bmi = $beratbadan / ($tinggi / 100 * $tinggi / 100);

        if ($bmi <= 17.0) {
            $status = 'kurus,kekurangan berat badan tinggi';
        } elseif ($bmi >= 17.0 && $bmi <= 18.4) {
            $sataus = 'kurus,kekurangan berat badan rendah';
        } elseif ($bmi >= 18.5 && $bmi <= 25.0) {
            $status = 'Normal';
        } elseif ($bmi >= 25.1 && $bmi <= 27.0) {
            $status = 'kelebihan berat badan  rendah';
        } elseif ($bmi >= 27.1) {
            $status = 'kelebihan berat badan tinggi';
        }

        if ($umur >= 0 && $umur <= 16) {
            $text = 'maka belum boleh punya sim';
        } else {
            $text = 'maka boleh punya sim';
        }

        return view('pages.BMI', compact('bmi', 'beratbadan', 'tinggi', 'status', 'umur', 'text'));
    }

    public function dosen()
    {
        $a = [
            [
                'nama_dosen' => 'Berli',
                'nip' => '0909090',
                'mhs' => [
                    [
                        'nama' => "Adrian",
                        'nim' => "938472",
                        'jurusan' => "jurusan Matematika",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "b inggris",
                            "produktip",
                        ],
                    ],
                    [
                        'nama' => "asep",
                        'nim' => "938472",
                        'jurusan' => "jurusan Sastra Sunda",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "B Indonesia",
                            "produktip",
                        ],
                    ],
                    [
                        'nama' => "Bayu",
                        'nim' => "142352",
                        'jurusan' => "jurusan Sastra Jepang",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "Sejarah",
                            "Kimia",
                        ],
                    ],
                    [
                        'nama' => 'ahdan',
                        'nim' => '312312',
                        'jurusan' => 'jurusan Teknik Informatika',
                        'mata_kuliah' =>
                        [
                            'matematika',
                            'b inggris',
                            'produktip',
                        ],
                    ],
                    [
                        'nama' => 'rio',
                        'nim' => '123123',
                        'jurusan' => 'jurusan Seni',
                        'mata_kuliah' =>
                        [
                            'matematika',
                            'geografi',
                            'produktip',
                        ],
                    ],
                ],
            ],
            [
                'nama_dosen' => 'Gera',
                'nip' => '0909090',
                'mhs' => [
                    [
                        'nama' => "Adrian",
                        'nim' => "938472",
                        'jurusan' => "jurusan Matematika",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "b inggris",
                            "produktip",
                        ],
                    ],
                    [
                        'nama' => "asep",
                        'nim' => "938472",
                        'jurusan' => "jurusan Sastra Sunda",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "B Indonesia",
                            "produktip",
                        ],
                    ],
                    [
                        'nama' => "Bayu",
                        'nim' => "142352",
                        'jurusan' => "jurusan Sastra Jepang",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "Sejarah",
                            "Kimia",
                        ],
                    ],
                    [
                        'nama' => 'ahdan',
                        'nim' => '312312',
                        'jurusan' => 'jurusan Teknik Informatika',
                        'mata_kuliah' =>
                        [
                            'matematika',
                            'b inggris',
                            'produktip',
                        ],
                    ],
                    [
                        'nama' => 'rio',
                        'nim' => '123123',
                        'jurusan' => 'jurusan Seni',
                        'mata_kuliah' =>
                        [
                            'matematika',
                            'geografi',
                            'produktip',
                        ],
                    ],
                ],
            ],
            [
                'nama_dosen' => 'Cahyahadi',
                'nip' => '0909090',
                'mhs' => [
                    [
                        'nama' => "Adrian",
                        'nim' => "938472",
                        'jurusan' => "jurusan Matematika",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "b inggris",
                            "produktip",
                        ],
                    ],
                    [
                        'nama' => "asep",
                        'nim' => "938472",
                        'jurusan' => "jurusan Sastra Sunda",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "B Indonesia",
                            "produktip",
                        ],
                    ],
                    [
                        'nama' => "Bayu",
                        'nim' => "142352",
                        'jurusan' => "jurusan Sastra Jepang",
                        'mata_kuliah' =>
                        [
                            "matematika",
                            "Sejarah",
                            "Kimia",
                        ],
                    ],
                    [
                        'nama' => 'ahdan',
                        'nim' => '312312',
                        'jurusan' => 'jurusan Teknik Informatika',
                        'mata_kuliah' =>
                        [
                            'matematika',
                            'b inggris',
                            'produktip',
                        ],
                    ],
                    [
                        'nama' => 'rio',
                        'nim' => '123123',
                        'jurusan' => 'jurusan Seni',
                        'mata_kuliah' =>
                        [
                            'matematika',
                            'geografi',
                            'produktip',
                        ],
                    ],
                ],
            ],
        ];

        // dd($a);

        return view('pages.dosen', ['dosen' => $a]);
    }
    public function mhs()
    {
        $kampus = [
            [
                'nama_dosen' => 'Yusuf Bachtiar',
                'mengajar' => 'Pemograman mobile',
                'mhsd' => [
                    [
                        'nama' => "Muhammad sholeh",
                        'nilai' => 78,
                    ],
                    [
                        'nama' => "Jujun Junaedi",
                        'nilai' => 85,
                    ],
                    [
                        'nama' => "Mamat alkatiri",
                        'nilai' => 90,
                    ],
                ],
            ],
            [
                'nama_dosen' => 'yaris riyadi',
                'mengajar' => 'Pemograman web',
                'mhsd' => [
                    [
                        'nama' => "Alfredd",
                        'nilai' => 67,
                    ],
                    [
                        'nama' => "Bruno",
                        'nilai' => 90,
                    ],

                ],
            ],
        ];
        // $rata = $kampus['mhsd']['nilai'];
        return view('pages.kampus', ['kampus' => $kampus]);

    }

    public function sekola()
    {
        $a = [
            ['nama_siswa' => 'Agus', 'jurusan' => 'TKR', 'nilai' => [
                ['indo' => 80, 'ing' => 97, 'pro' => 67, 'mtk' => 100],
            ],
            ],
            ['nama_siswa' => 'Mahmud', 'jurusan' => 'TKR', 'nilai' => [
                ['indo' => 78, 'ing' => 86, 'pro' => 90, 'mtk' => 67],
            ],
            ],
            ['nama_siswa' => 'Rendi', 'jurusan' => 'TKR', 'nilai' => [
                ['indo' => 90, 'ing' => 50, 'pro' => 65, 'mtk' => 78],
            ],
            ],
            ['nama_siswa' => 'Firman', 'jurusan' => 'RPL', 'nilai' => [
                ['indo' => 78, 'ing' => 90, 'pro' => 56, 'mtk' => 78],
            ],
            ],
            ['nama_siswa' => 'Abdul', 'jurusan' => 'RPL', 'nilai' => [
                ['indo' => 89, 'ing' => 67, 'pro' => 80, 'mtk' => 90],
            ],
            ],
        ];
        return view('pages.sekola', ['sekola' => $a]);

    }

    public function belanjaan(Type $var = null)
    {
        $a =
            [
            ['nama_orang' => 'ALFIAN',
                'pembelian' => [
                    ['nama_barang' => 'SEPATU', 'merk' => 'VANS', 'harga_barang' => 250000],
                    ['nama_barang' => 'CELANA', 'merk' => 'CARDINAL', 'harga_barang' => 150000],
                    ['nama_barang' => 'KUPLUK', 'merk' => 'EIGER', 'harga_barang' => 100000],
                    ['nama_barang' => 'BAJU', 'merk' => 'BAONG', 'harga_barang' => 100000],
                ],
            ],
            ['nama_orang' => 'DIDA',
                'pembelian' => [
                    ['nama_barang' => 'TOPI', 'merk' => 'VANS', 'harga_barang' => 100000],
                    ['nama_barang' => 'CELANA', 'merk' => 'H&M', 'harga_barang' => 75000],
                    ['nama_barang' => 'BAJU', 'merk' => '3SECOND', 'harga_barang' => 125000],
                ],
            ],
        ];
        return view('pages.belanjaan', ['belanjaan' => $a]);

    }

}
