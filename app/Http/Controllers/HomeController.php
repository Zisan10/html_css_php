<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('frontend/dashboard');
    }
    public function about(){
        return view ('frontend/about');
    }
    public function contact(){
        return view ('frontend/contact');
    }
    public function facebookContact(){
        return view ('frontend/facebookContact');
    }
}
