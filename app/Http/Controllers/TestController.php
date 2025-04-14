<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
public function showLang()
{
    return view("langView");

}
}