@extends('layouts.plantilla')
    
@section('titulo','Recuerdos') 

    @section('contenido')
    <h1 class="display-1 text-center text-danger">RECUERDOS</h1>
  
    
 <div class="container">  
 @foreach($consulRecuerdos as $item)   
 

    <div class="card w-75 mb-3 mt-5">
  <div class="card-body">
    <h5 class="card-title fw-semibold">{{ $item->titulo }} </h5>
    <p class="card-text fst-italic"> {{$item->fecha}} </p>
    <p class="card-text fw-lighter"> {{$item->recuerdo}} </p>
    <a href="#" class="btn btn-warning">Editar</a>
    <a href="#" class="btn btn-danger">Borrar</a>
  </div>
</div>
@endforeach
</div>


    @endsection
