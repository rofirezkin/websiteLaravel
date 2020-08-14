<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukTokoController extends Controller
{
    public function index(){
        return view("pages.produktoko");
    }
}
