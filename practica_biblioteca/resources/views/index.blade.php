@extends('layouts.plantilla')
    
@section('titulo','Principal')


@section('contenido')

<div class="text-center">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-5"> <!-- Elimina el borde del card -->
                    <img src="{{ asset('images/tlatelolco.png') }}" class="card-img-top" alt="Tlatelolco en la mañana del 03 de octubre 1968">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Tlatelolco: a medio siglo del movimiento estudiantil.</h5>
                        <p class="card-text">Elena Poniatowska es una de las voces de referencia sobre el movimiento estudiantil de 1968 en México. Su libro, "La Noche de Tlatelolco", recoge los testimonios de la matanza de estudiantes que marcó la historia del país. Te invitamos a leer el siguiente artículo y, por supuesto, la magnífica obra de esta autora.</p>
                        <a href="https://www.bbc.com/mundo/noticias-america-latina-45480246" class="btn btn-primary">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!--  <div class="container mt-5">
<div class="card text-center">
  <div class="card-header">
   <h1 class="display-5 text-center text-warning"> La noche de Tlatelolco: a medio siglo del movimiento.</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <p class="card-text">Elena Poniatowska es una de las voces de referencia sobre el movimiento estudiantil de 1968 en México. Su libro, "La Noche de Tlatelolco", recoge los testimonios de la matanza de estudiantes que marcó la historia del país. Te invitamos a leer el siguiente artículo y, por supuesto, la obra de esta autora .</p>
    <a href="#" class="btn btn-primary">Leer más</a>
  </div>
 
</div>
</div>-->




@endsection
