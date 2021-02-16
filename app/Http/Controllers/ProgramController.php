<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function listProgram($program)
    {
        $link = '<a href="https://www.educastudio.com/program/kunjungan-industri/' . $program . '" target="_blank">';
        $link .= 'https://www.educastudio.com/program/' . $program;
        $link .=  '<a/>';
        return $link;
    }
}