<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafesController extends Controller
{
    public function index(){
        return view('cafes.index');
    }
    
    public function menu(){
        return view('cafes.menu');
    }
    
    public function news(){
        return view('cafes.news');
        
    }
    
    public function contact(){
        return view('cafes.contact');
    }
}


