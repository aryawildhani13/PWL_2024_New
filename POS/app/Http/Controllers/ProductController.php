<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        $products = [
            (object) ['name' => 'Mie Instan', 'price' => 5000],
            (object) ['name' => 'Minuman Soda', 'price' => 3000],
            (object) ['name' => 'Susu', 'price' => 10000],
            // Anda dapat menambahkan produk makanan dan minuman lainnya di sini
        ];

        return view('products.food_beverage', compact('products'));
    }

    public function beautyHealth()
    {
        $products = [
            (object) ['name' => 'Sabun Mandi', 'price' => 15000],
            (object) ['name' => 'Krim Wajah', 'price' => 25000],
            (object) ['name' => 'Masker Wajah', 'price' => 10000],
            // Anda dapat menambahkan produk kecantikan dan kesehatan lainnya di sini
        ];

        return view('products.beauty_health', compact('products'));
    }

    public function homeCare()
    {
        $products = [
            (object) ['name' => 'Pembersih Lantai', 'price' => 20000],
            (object) ['name' => 'Deterjen', 'price' => 15000],
            (object) ['name' => 'Sapu', 'price' => 5000],
            // Anda dapat menambahkan produk perawatan rumah lainnya di sini
        ];

        return view('products.home_care', compact('products'));
    }

    public function babyKid()
    {
        $products = [
            (object) ['name' => 'Popok Bayi', 'price' => 30000],
            (object) ['name' => 'Mainan Anak', 'price' => 20000],
            (object) ['name' => 'Pakaian Bayi', 'price' => 25000],
            // Anda dapat menambahkan produk bayi dan anak-anak lainnya di sini
        ];

        return view('products.baby_kid', compact('products'));
    }
}
