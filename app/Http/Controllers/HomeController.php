<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function toContact(){
        return view("contact0077");
    }
    public function toArtikel(){
        return view("artikel0077");
    }
}
