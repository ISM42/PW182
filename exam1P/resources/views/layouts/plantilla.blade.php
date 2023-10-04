<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
</head>
<body>

    @yield('contenido')
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="/">INICIO</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="/vista1">VISTA1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/vista2">VISTA2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/vista3">VISTA3</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1">First heading</h4>
  <p>...HOLA</p>
  <h4 id="scrollspyHeading2">Second heading</h4>
  <p>...MUNDO</p>
  <h4 id="scrollspyHeading3">Third heading</h4>
  <p>...</p>
  <h4 id="scrollspyHeading4">Fourth heading</h4>
  <p>...</p>
  <h4 id="scrollspyHeading5">Fifth heading</h4>
  <p>...</p>
</div>
</body>
</html>