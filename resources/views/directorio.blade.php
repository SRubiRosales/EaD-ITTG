<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Define el título para el documento-->
        <title>Educación a Distancia | ITTG</title>

        <!-- Hojas de estilo-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
    <header><!--Encabezado-->
            <div id="logos-gob"><!--Logos institucionales-->
                <a href="https://www.gob.mx/" target="_blank"><img src="{{ asset('imgs/gobmx.png') }}" alt="logo-gob-mx"></a>
                <a href="https://www.gob.mx/sep" target="_blank"><img src="{{ asset('imgs/sep.png') }}" alt="logo-educacion"></a>
                <a href="https://www.tecnm.mx/inicio.aspx" target="_blank"><img src="{{ asset('imgs/tecnm.jpg') }}" alt="logo-tecnm"></a>
                <a href="https://www.tuxtla.tecnm.mx/" target="_blank"><img src="{{ asset('imgs/ittg.png') }}" alt="logo-ittg"></a>
            </div><!--Logos institucionales-->
        </header>
        <!--Barra de navegación-->
        <nav class="navbar navbar-expand menu">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a class="active" href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Oferta Educativa</a>
                    </li>
                    <li>
                        <a href="{{ url('directorio') }}">Directorio</a>
                    </li>
                    <li>
                        <a href="#">Contáctanos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
            </div>
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
        
        <div class="page">
        <nav aria-label="breadcrumb"><!--Navegador de breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Directorio</li>
            </ol>
        </nav>
        
            <aside>
                <iframe width="280" height="160" src="https://www.youtube.com/embed/1fysHX-IgHo" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </aside>
            <section class="contenedor"><!--Sección genérica-->
            <h1 style="hidden">Educación a Distancia</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Extensión</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>José Manuel Rosado Pérez</td>
                            <td>Director del ITTG</td>
                            <td>101</td>
                            <td>dir_tgutierrez@tecnm.mx</td>
                        </tr>
                        <tr>
                            <td>Guillermina Peña Padilla</td>
                            <td>Subdirección de Servicios Administrativos</td>
                            <td>200<br/>201</td>
                            <td>admon_tgutierrez@tecnm.mx</td>
                        </tr>
                        <tr>
                            <td>José Ángel Zepeda Hernández</td>
                            <td>Subdirección Académica</td>
                            <td>300<br/>301</td>
                            <td>acad_tgutierrez@tecnm.mx</td>
                        </tr>
                        <tr>
                            <td>Alba Mercedes Mijangos Oceguera</td>
                            <td>Coordinación General de Educación a Distancia del ITTG</td>
                            <td>323</td>
                            <td>distancia@ittg.edu.mx</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Coordinación de Titulación</td>
                            <td>3246</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Abelardo Guadalupe Zenteno Flores</td>
                            <td>Coordinación Extensión Venustiano Carranza</td>
                            <td></td>
                            <td>ccarranza@ittg.edu.mx</td>
                        </tr>
                        <tr>
                            <td>Daniel Parcero Martínez</td>
                            <td>Coordinación Extensión Palenque</td>
                            <td></td>
                            <td>cpalenque@ittg.edu.mx</td>
                        </tr>
                        <tr>
                            <td>Gerardo López López</td>
                            <td>Coordinación Extensión Bochil</td>
                            <td></td>
                            <td>cbochil@ittg.edu.mx</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </body>
    <footer id="colophon" class="site-footer" role="contentinfo">          
            <div id="fondo-footer">
                <div class="page">
                    <section id="contenedorFooterL">
                        <img src="{{ asset('imgs/gobmx_logo.png') }}" width="200px;">
                    </section>
                    <section id="contenedorFooterC">
                        <h4>Instituto Tecnológico de Tuxtla Gutiérrez</h4>
                        <h5>Martínez Rodas José Fabián<br>Rosales Sánchez Sharon Rubí</h5></section>
                    <section id="contenedorFooterR">
                        <h4>Síguenos en</h4>
                        <a href="https://www.facebook.com/tecnmtuxtlagtz" target="_blank"><img class="icono-footer" src="{{ asset('imgs/facebook.png') }}"></a>
                        <a href="https://twitter.com/tecnmtuxtlagtz" target="_blank"><img class="icono-footer" src="{{ asset('imgs/twitter.png') }}"></a>
                    </section>
                    <hr>
                </div>
            </div>
        </footer>
</html>
