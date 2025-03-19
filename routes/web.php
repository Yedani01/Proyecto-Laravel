<?php

use App\Http\Controllers\inicioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route ::get('/inicio',function(){
    return view('inicio');

});

Route ::get('/home',[inicioController::class,'index']);

Route ::get('/login',function(){
    return view('login');
});
Route ::get('/registro',function(){
    return view('registro');
});
Route ::get('/juegos',function(){
    return view('juegos');

});