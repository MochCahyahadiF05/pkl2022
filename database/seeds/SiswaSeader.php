<?php

use Illuminate\Database\Seeder;

class SiswaSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['nama' => 'Abdul', 'nis' => '2090130912', 'jk' => 'L', 'tgl_lahir' => '1998-08-15', 'alamat' => 'Bandung'],
            ['nama' => 'Silvana', 'nis' => '2090130913', 'jk' => 'P', 'tgl_lahir' => '1999-11-13', 'alamat' => 'jakarta'],
        ];
        DB::table('siswas')->insert($sampel);
    }
}
