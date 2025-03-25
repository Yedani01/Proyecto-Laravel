<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    //
    public function index(){
        return view("inicio");
    }
    public function halo1(){
        return view("halo1");
    }
    public function halo2(){
        return view("halo2");
    }
    public function halo3(){
        return view("halo3");
    }
    public function halo4(){
        return view("halo4");
    }
    public function halo5(){
        return view("halo5");
    }
    
}
