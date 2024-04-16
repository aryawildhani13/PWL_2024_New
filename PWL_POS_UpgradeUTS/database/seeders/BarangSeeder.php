<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_kode' => 'ITM01',
                'barang_nama' => 'Kaos Polos',
                'kategori_id' => '1',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_kode' => 'ITM02',
                'barang_nama' => 'Kaos Animek',
                'kategori_id' => '1',
                'harga_beli' => 7000,
                'harga_jual' => 14000,
            ],
            [
                'barang_kode' => 'ITM03',
                'barang_nama' => 'Hoodie 02',
                'kategori_id' => '3',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_kode' => 'ITM04',
                'barang_nama' => 'Kemeja Gunung',
                'kategori_id' => '2',
                'harga_beli' => 3000,
                'harga_jual' => 6000,
            ],
            [
                'barang_kode' => 'ITM05',
                'barang_nama' => 'Kemeja Kantor',
                'kategori_id' => '2',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_kode' => 'ITM06',
                'barang_nama' => 'Sepatu Pantopel',
                'kategori_id' => 4,
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_kode' => 'ITM07',
                'barang_nama' => 'Topi Lutpi',
                'kategori_id' => 5,
                'harga_beli' => 1000,
                'harga_jual' => 2000,
            ],
            [
                'barang_kode' => 'ITM08',
                'barang_nama' => 'Kaos Ultramen',
                'kategori_id' => 1,
                'harga_beli' => 10000,
                'harga_jual' => 30000,
            ],
            [
                'barang_kode' => 'ITM09',
                'barang_nama' => 'Sepatu Astro Boy',
                'kategori_id' => 4,
                'harga_beli' => 15000,
                'harga_jual' => 30000,
            ],
            [
                'barang_kode' => 'ITM10',
                'barang_nama' => 'Hoodie Joyko',
                'kategori_id' => 3,
                'harga_beli' => 20000,
                'harga_jual' => 40000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
