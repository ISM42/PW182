<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
@include('partials.navbar')

</head>
<body>

 
@yield('contenido')
    
    

   
    
  </div>
</div>
</body>
<footer> <center>Biblioteca José Vasconcelos © | <p> {{ date('d/m/Y') }}</p> <center></footer>
</html>