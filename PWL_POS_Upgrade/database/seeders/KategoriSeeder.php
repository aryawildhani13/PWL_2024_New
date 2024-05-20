<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
          [
            'kategori_kode' => 'K001',
            'kategori_nama' => 'Kaos',
            'created_at' => now(),
          ],
          [
            'kategori_kode' => 'K002',
            'kategori_nama' => 'Kemeja',
            'created_at' => now(),
          ],
          [
            'kategori_kode' => 'K003',
            'kategori_nama' => 'Hoodie',
            'created_at' => now(),
          ],
          [
            'kategori_kode' => 'K004',
            'kategori_nama' => 'Sepatu',
            'created_at' => now(),
          ],
          [
            'kategori_kode' => 'K005',
            'kategori_nama' => 'Topi',
            'created_at' => now(),
          ]
        ];

        DB::table('m_kategori')->insert($data);
    }
}
