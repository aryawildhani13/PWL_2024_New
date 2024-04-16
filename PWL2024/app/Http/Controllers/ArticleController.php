<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($artId)
    {
        return 'Halaman Artikel dengan ID: ' . $artId;
    }

    
}
