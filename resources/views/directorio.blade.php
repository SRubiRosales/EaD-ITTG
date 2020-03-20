<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Educación a Distancia | ITTG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            
        </style>
    </head>
    <body>
    <header id="masthead" class="site-header hidden-print header-gray" role="banner">
        <div id="logos-gob">
          <a href="https://www.gob.mx/" target="_blank"><img src="https://www.tuxtla.tecnm.mx/wp-content/themes/albinomouse-child/pleca-gob1.png" alt="logo-gob-mx"></a>
          <a href="https://www.gob.mx/sep" target="_blank"><img src="https://www.tuxtla.tecnm.mx/wp-content/themes/albinomouse-child/pleca-gob2.png" alt="logo-educacion"></a>
          <a href="https://www.tecnm.mx/inicio.aspx" target="_blank"><img src="https://www.tuxtla.tecnm.mx/wp-content/themes/albinomouse-child/pleca_tecnm.jpg" alt="logo-tecnm"></a>
          <a href="http://ittg.edu.mx/" target="_blank"><img src="{{ asset('imgs/ittg.png') }}" alt="Logo-ittg" width="140px;"></a>
        </div>
    </header>
    <nav class="navbar navbar-center navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Carreras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contáctanos</a>
            </li>
            </ul>
    </nav>
        <!--    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif-->
            <h1>Educación a Distancia</h1>
            <div class="page">
         
                    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre y Cargo</th>
      <th scope="col">Ver/Descargar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nuevo ingreso</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
  </tbody>
</table>
                  
            </div>
    </body>
</html>
