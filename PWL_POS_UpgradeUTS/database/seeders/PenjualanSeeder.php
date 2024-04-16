<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // 10 penjualan data
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Momon',
                'penjualan_kode' => 'P001',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Morgan',
                'penjualan_kode' => 'P002',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Sumiyati',
                'penjualan_kode' => 'P003',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Piter',
                'penjualan_kode' => 'P004',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Gogon',
                'penjualan_kode' => 'P005',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Mafi',
                'penjualan_kode' => 'P006',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'Rami',
                'penjualan_kode' => 'P007',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'sinta',
                'penjualan_kode' => 'P008',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'lefi',
                'penjualan_kode' => 'P009',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'fergi',
                'penjualan_kode' => 'PK010',
                'penjualan_tanggal' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
