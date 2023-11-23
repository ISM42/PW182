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
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{ $item->id }}">
  Editar
</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{ $item->id }}">
  Eliminar
</button>
  </div>
</div>
@include('partials.modal')
@include('partials.modal_delete')
@endforeach
</div>


    @endsection
