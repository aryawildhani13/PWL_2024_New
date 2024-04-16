<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];
        $activeMenu = 'dashboard';
        return view('home', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function chartUser()
    {
        $users = DB::table('m_user')
            ->select('level_id', DB::raw('count(*) as total'))
            ->groupBy('level_id')->get();
        return $users;
    }

    public function chartStok()
    {
        $stok = DB::table('t_stok')
            ->join('m_barang', 't_stok.barang_id', '=', 'm_barang.barang_id')
            ->select('m_barang.barang_nama', DB::raw('sum(stok_jumlah) as total'))
            ->groupBy('t_stok.barang_id')->get();

        return $stok;
    }

    public function chartPenjualan() {
        $penjualan = DB::table('t_penjualan')
        ->select(DB::raw('DATE(penjualan_tanggal) as date'), DB::raw('count(*) as total'))
        ->groupBy('date')
        ->get();

        return $penjualan;
    }
}
