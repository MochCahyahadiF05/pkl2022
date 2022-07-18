<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Belajar Huruf Hijaiyah',
                'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Indonesia U-19 Gagal Lolos Semifinal',
                'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Cara Cepat Belajar Pemrograman',
                'content' => 'Try & Error Terus Menerus'],
        ];

        DB::table('post')->insert($sample);

    }
}
