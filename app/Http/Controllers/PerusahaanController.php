<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sayur()
    {
        return view('sayur');
    }

    public function kelompoktani()
    {
        return view('kelompoktani');
    }
}
