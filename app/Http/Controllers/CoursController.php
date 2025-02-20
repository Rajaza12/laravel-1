<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function laravel()
    {
        return view('cours.laravel');
    }

    public function react()
    {
        return view('cours.react');
    }
}
