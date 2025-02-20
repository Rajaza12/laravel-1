<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TpController extends Controller
{
    public function laravel()
    {
        return view('tp.laravel');
    }

    public function react()
    {
        return view('tp.react');
    }
}
