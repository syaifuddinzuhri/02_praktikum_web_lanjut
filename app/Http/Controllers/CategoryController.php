<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showProducts($category)
    {
        $link = '<a href="https://www.educastudio.com/category/' . $category . '" target="_blank">';
        $link .= 'https://www.educastudio.com/category/' . $category;
        $link .=  '<a/>';
        return $link;
    }
}