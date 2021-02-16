<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showProducts($category)
    {
        return '<a href="https://www.educastudio.com/category/' . $category . '" target="_blank">https://www.educastudio.com/category/' . $category . '</a>';
    }
}