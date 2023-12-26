<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class onshop extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tambah()
    {
        return view('tambah');
    }
}
