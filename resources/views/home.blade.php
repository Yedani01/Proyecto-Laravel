@extends('plantilla')
@section('contenido')

@php
 echo print_r($personas);
 foreach($personas as $persona){
 echo "$persona<br>";
 }
@endphp
<h1> Home usando blade</h1>
@endsection
 

