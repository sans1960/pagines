<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function services(){
        return view('pages.services');
    }
    public function contact(){
        return view('pages.contact');
    }
}
