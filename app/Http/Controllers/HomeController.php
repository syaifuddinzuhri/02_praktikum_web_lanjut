<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        // Praktikum 2
        return 'Selamat datang';

        // Praktikum 3
        // return '<a href="https://www.educastudio.com/">https://www.educastudio.com/</a>';
    }
}