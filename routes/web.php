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
Route ::get('/halo1',function(){
    return view('halo1');

});
Route ::get('/halo2',function(){
    return view('halo2');

});
Route ::get('/halo3',function(){
    return view('halo3');

});
Route ::get('/halo4',function(){
    return view('halo4');

});
Route ::get('/halo5',function(){
    return view('halo5');

});
Route ::get('/informacion',function(){
    return view('informacion');

});
