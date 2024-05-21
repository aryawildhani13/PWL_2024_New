<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $users = DB::table('m_user')->pluck('user_id')->toArray();
        
        if (empty($users)) {
            throw new \Exception("No valid user_id found in m_user table.");
        }
        
        $buyers = [
            'Momon', 'Morgan', 'Sumiyati', 'Piter', 'Gogon', 'Mafi', 'Rami', 'Sinta', 'Lefi', 'Fergi', 
            'Momonmin', 'Morgana', 'Sumiyatium', 'Piterias', 'Gogongg', 'Mafia', 'Ramly', 'Sinti', 'Lefian', 'Fergiawan',
            
        ];

        $data = [];

        for ($i = 1; $i <= 200; $i++) {
            $date = Carbon::create(2024, 5, rand(1, 20));
            $data[] = [
                'penjualan_tanggal' => $date,
                'user_id' => $users[array_rand($users)], 
                'pembeli' => $buyers[array_rand($buyers)],
                'penjualan_kode' => 'P' . str_pad($i, 3, '0', STR_PAD_LEFT),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
