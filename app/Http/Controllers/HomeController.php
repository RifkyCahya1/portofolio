<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Home');
    }

    public function about(){
        return view('About');
    }

    public function portofolio(){
        return view('Portofolio');
    }

    public function Course(){
        return view('Course');
    }
}
