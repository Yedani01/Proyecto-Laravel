<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class inicioController extends Controller
{

    public function inicio(){
        return view("inicio",["titulo"=>"Home"]);

    }
    
    public function halo1(){
        return view("halo1",["titulo"=>"halo1"]);
    }
    public function halo2(){
        return view("halo2",["titulo"=>"halo2"]);
    }
    public function halo3(){
        return view("halo3",["titulo"=>"halo3"]);
    }
    public function halo4(){
        return view("halo4",["titulo"=>"halo4"]);
    }
    public function halo5(){
        return view("halo5",["titulo"=>"halo5"]);
    }
    public function noticias(){
        return view("noticias",["titulo"=>"noticias"]);
    }
}
