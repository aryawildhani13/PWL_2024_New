<?php

namespace App\Http\Controllers;

use COM;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'hello World';
    }
    public function greeting(){
        return view('blog.hello')
            ->with('name','Andi')
            ->with('occupation','Astronaut');
    }
}

