@extends('layouts.plantilla')
    
@section('titulo','Registro libro')


@section('contenido')
<form method= "POST" action="/guardarRegistro">
  @csrf
<div class="container text-center">

@if(session()->has ('confirmacion'))
<!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('confirmacion')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  -->

<script>   Swal.fire('Libro "{{session('confirmacion')}}" guardado')</script>
@endif


@if($errors->any())
@foreach($errors->all() as $error)
<!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>{{$error}} </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  -->

@endforeach
@endif

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ISBN: </label>
  <input type="text" class="form-control"  name="txtISBN"  value="{{old('txtISBN')}}">
  <p class="text-danger fst-italic">{{$errors->first('txtISBN')}}      </p>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Título: </label>
  <input class="form-control" id="exampleFormControlTextarea1" name="txtTitulo"  value="{{old('txtTitulo')}}">
  <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}}      </p>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"  >Autor </label>
  <input name="txtAutor" type="text" class="form-control"   value="{{old('txtAutor')}}">
  <p class="text-danger fst-italic">{{$errors->first('txtAutor')}}      </p>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Páginas: </label>
  <input name="txtPag" type="text" class="form-control"  value="{{old('txtPag')}}">
  <p class="text-danger fst-italic">{{$errors->first('txtPag')}}      </p>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Editorial: </label>
  <input type="text" class="form-control" name="txtEditorial"  value="{{old('txtEditorial')}}" >
  <p class="text-danger fst-italic">{{$errors->first('txtEditorial')}}      </p>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Email editorial: </label>
  <input name="txtEmailEditorial" type="text" class="form-control"   value="{{old('txtEmailEditorial')}}">
  <p class="text-danger fst-italic">{{$errors->first('txtEmailEditorial')}}      </p>
</div>

<button type="submit" class="btn btn-primary"> Guardar registro </button>
</div>
</form>
@endsection
