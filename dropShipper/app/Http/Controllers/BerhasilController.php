<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerhasilController extends Controller
{
    public function index(){
        return view("pages.berhasil");
    }
}
