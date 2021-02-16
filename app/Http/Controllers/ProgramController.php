<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function listProgram($program)
    {
        return '<a href="https://www.educastudio.com/program/kunjungan-industri/' . $program . '" target="_blank">https://www.educastudio.com/program/' . $program . '</a>';
    }
}