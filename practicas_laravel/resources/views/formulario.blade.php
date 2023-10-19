@extends('layouts.plantilla')

@section('titulo','Formulario') 
    
    @section('contenido')
    <h1 class="display-1 text-center text-danger">FORMULARIO</h1>
<div class= "container mt-5 col-md-6">

    <div class="card">
  <div class="card-header text-primary fs-5 fw-semibold  text-center">
    Introduce tus recuerdos aquí...
  </div>

  <div class="card-body">   
  <form method = "POST" action="/guardarRecuerdo">
  @csrf <!--   GENERADOR DE TOKEN //Con esta línea generamos un token oculto para que el middleware no bloqué la petición por POST -->
  
  <div class="mb-3">
    <label class="form-label">Título: </label>
    <input type="text" name ="txtTitulo" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Recuerdo: </label>
    <input type="text" name= "txtRecuerdo" class="form-control">
  </div>
  

  </div>

  <div class="card-footer text-body-secondary">
    <div class= "d-grid gap-2">
  <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
</form>
</div>
  </div>
</div>
</div>
    @endsection
