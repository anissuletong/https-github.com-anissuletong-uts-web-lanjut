<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'kode_jenis_artikel'=>'OR',
                'judul' => 'Lucinta luna sport',
                'isi' => 'Lucinta luna sedang bermain bola pimpong bersama nikita mirzani'
            ],
            [
                'kode_jenis_artikel'=>'PL',
                'judul'=>'Politik',
                'isi'=>'Puan Maharani ialah seorang DPR yang suka mematikan mic'
            ]
        ]);
        //
    }
}
