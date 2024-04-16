<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function showPOS()
    {
        return view('penjualan');
    }
}
