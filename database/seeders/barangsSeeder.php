<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class barangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::insert(
            [
                [
                    'Nama_Barang' => 'MAsker duckbil',
                    'Gambar' => 'gmb01.jpeg',
                    'Harga' => '25000',
                    'Stok' => '125',
                    'Bahan' => 'katun jepang',
                    'Deskripsi' => 'Masker 3 Ply / 3 Lapisan.
                    - Aman digunakan dan bersertifikat.
                    - Izin Kemenkes RI FR.03.02/VA/07826/2021
                    - Highly efficient filtration BFE 95%',
                ],
                [
                    'Nama_Barang' => 'Masker Duckbill Anak 50 Pcs Karakter',
                    'Gambar' => 'gmb02.jpg',
                    'Harga' => '15000',
                    'Stok' => '95',
                    'Bahan' => 'katun jepang',
                    'Deskripsi' => '▪︎ Warna : Warna Motif
                    ▪︎ Kemasan: 1 Pack / Box isi 50 Pcs 
                    ▪︎ Ukuran : Anak 13 cm x 9 cm
                    ▪︎ Tipe : Non Medis 3 Ply
                    ▪︎ Model : Duckbill Earloop 
                    ▪︎ Garansi : Tidak',
                ],
                [
                    'Nama_Barang' => 'Masker Duckbill Anak 50 Pcs Karakter',
                    'Gambar' => 'gmb03.jpeg',
                    'Harga' => '25000',
                    'Stok' => '200',
                    'Bahan' => 'katun jepang',
                    'Deskripsi' => 'Masker 3 Ply / 3 Lapisan.
                    - Aman digunakan dan bersertifikat.
                    - Izin Kemenkes RI FR.03.02/VA/07826/2021
                    - Highly efficient filtration BFE 95%',
                ],
            ]
        );
    }
}
