<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstructurasDeControl extends Controller
{
    public function index(){
        return view('plantilla');
    }
    public function index2(){
        return view('rubens');
    }
    public function index3(){
        return view('velaz');
    }
    public function index4(){
        return view('sanzio');
    }
    public function index5(){
        return view('tizi');
    }
}
