<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('main.beranda.index', [
            "title" => "Beranda",
        ]);
    }
    public function test()
    {
        return view('main.beranda.test', [
            "title" => "Test",
        ]);
    }
}
