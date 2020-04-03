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
                        <a class="active" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nadropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Oferta Educativa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('ofertaEducativa') }}">Sedes Remotas</a>
                            <a class="dropdown-item" href="{{ url('convocatoria') }}">Convocatoria</a>
                        </div>
                    </li>
                    <li class=" nav-item dropdown">
                        <a class="nadropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contacto
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('directorio') }}">Directorio</a>
                            <a class="dropdown-item" href="{{ url('contacto') }}">Correo Institucional</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-primary" type="button">
                        <a href="{{ url('/login') }}">
                        Iniciar Sesión
                        <span><img src="{{ asset('imgs/login.png') }}" alt="Login"></span>
                        </a>
                    </button>
                </form>
            </div>
        </nav><!--Fin de la barra de navegación-->
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
            <ol class="breadcrumb"><!--Listas ordenadas-->
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li><!--Punto 1-->
                <li class="breadcrumb-item active" aria-current="page">Directorio</li><!--Punto 2-->
            </ol><!-- Fin de lista ordenada -->
        </nav>
        
        <aside><!-- Aside, contenido no directamente relacionado con el contenido principal de la página -->
            <!--Inline frame, incrusta video de YouTube en la página-->
            <iframe width="300" height="200" src="https://www.youtube.com/embed/1fysHX-IgHo" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- Vídeo cargado desde nuestra carpeta de recursos, con controles de vídeo-->
            <video width="300" height="240" controls>
                <source src="video/video.mp4" type="video/mp4"> <!-- Carga del vídeo, y definición de tipo, con mensaje en caso de error-->
                <p>Lo sentimos, su navegador no soporta este video</p>
            </video>
            <i>Conoce los síntomas que provoca el Coronavirus y cómo prevenir el contagio</i><!--Texto en cursiva-->
            <audio src="{{ asset('media/Coronavirus-sintomas-y-prevencion.mp3') }}" preload="auto" controls></audio><!--Audio-->
            <div> <!--Etiqueta con título para nuestro objeto-->
                    <h2>Encuentranos en:</h2>
                    <!-- Inicio de objeto de tipo html, que ejecuta una vista de google maps con la dirección del Tecnm campus Tgz -->
                    <object
                        type="text/html"
                        data="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15281.603803455482!2d-93.172576!3d16.756716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e771d3242c2f25a!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20Campus%20Tuxtla%20Guti%C3%A9rrez!5e0!3m2!1ses-419!2smx!4v1584724817186!5m2!1ses-419!2smx"
                        style="width: 300px; height:300px;">
                        ERROR (no puede mostrarse el objeto)
                    </object>
                </div><!-- Fin de la sección del objeto -->
        </aside><!-- Fin de aside-->
        <section class="contenedor"><!--Sección genérica-->
            <table class="table"><!--Tabla con información de contacto de directivos del ITTG-->
                <thead><!--Encabezado de la tabla-->
                    <tr><!--Fila-->
                        <th>Nombre</th><!--Columnas de la tabla-->
                        <th>Cargo</th>
                        <th>Extensión</th>
                        <th>Correo</th>
                    </tr>
                </thead><!--Fin de encabezado de la tabla-->
                <tbody><!--Cuerpo de la tabla-->
                    <tr><!--Columnas de la primer fila-->
                        <td>José Manuel Rosado Pérez</td>
                        <td>Director del ITTG</td>
                        <td>101</td>
                        <td>dir_tgutierrez@tecnm.mx</td>
                    </tr>
                    <tr><!--Columnas de la segunda fila-->
                        <td>Guillermina Peña Padilla</td>
                        <td>Subdirección de Servicios Administrativos</td>
                        <td>200<br/>201</td>
                        <td>admon_tgutierrez@tecnm.mx</td>
                    </tr>
                    <tr><!--Más filas...-->
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
                        <td>Griselda Yazmin Petrikowsky López</td>
                        <td>Sede Acala</td>
                        <td></td>
                        <td>acalaed@ittg.edu.mx</td>
                    </tr>
                    <tr>
                        <td>Favio Alejandro Alvarado Cruz</td>
                        <td>Sede Concordia (Ingeniería en Sistemas Computacionales)</td>
                        <td></td>
                        <td>favio.alvarado@ittg.edu.mx</td>
                    </tr>
                    <tr>
                        <td>Teresa de Jésus Gomez Ruiz</td>
                        <td>Sede Concordia (Ingeniería Industrial)</td>
                        <td></td>
                        <td>teresa.gomez@ittg.edu.mx</td>
                    </tr>
                    <tr>
                        <td>Lic. César Wilmar Díaz Ramírez</td>
                        <td>Sede Siltepec (Ingeniería en Sistemas Computacionales)</td>
                        <td></td>
                        <td>cesar.diaz@ittg.edu.mx</td>
                    </tr>
                    <tr>
                        <td>Ing. Ademia Laparra Hernández</td>
                        <td>Sede Siltepec (Ingeniería en Sistemas Computacionales)</td>
                        <td></td>
                        <td>ademia.laparra@ittg.edu.mx</td>
                    </tr>
                    <tr>
                        <td> Lic Sonia Marisol Anzueto Roblero</td>
                        <td>Sede Siltepec (Ingeniería Industrial)</td>
                        <td></td>
                        <td>sonia.anzueto@ittg.edu.mx</td>
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
            <div class="site-info"><!--Información de contacto-->
                <hr/><!--Separador-->
                <p>contacto.distancia@ittg.edu.mx<br/><!--Párrafo con saltos de línea-->
					Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599,<br/>
                    Tels. (961)61 5 03 80 y (961)61 5 04 61 Ext. 323<br/>
                    Línea directa (961) 61 5 62 52
				</p>
            </div><!-- .site-info -->
        </div>
        <footer class="site-footer" role="contentinfo"><!--Footer-->
            <div class="page" id="fondo-footer">
                <section id="contenedorFooterL"><!--Sección izquierda del footer-->
                    <img src="{{ asset('imgs/gobmx_logo.png') }}" width="200px;"><!--Imagen del gobierno de MX-->
                </section>
                <section id="contenedorFooterC"><!--Sección central del footer-->
                    <h4>Instituto Tecnológico de Tuxtla Gutiérrez</h4>
                    <h5>Martínez Rodas José Fabián<br>Rosales Sánchez Sharon Rubí</h5></section>
                <section id="contenedorFooterR"><!--Sección derecha del footer-->
                    <h4>Síguenos en</h4>
                    <!--Enlaces a redes sociales-->
                    <a href="https://www.facebook.com/edittg.web" target="_blank">
                        <img class="icono-footer" src="{{ asset('imgs/facebook.png') }}">
                    </a>
                    <a href="https://twitter.com/tecnmtuxtlagtz" target="_blank">
                        <img class="icono-footer" src="{{ asset('imgs/twitter.png') }}">
                    </a>
                </section>
                <hr>
            </div>
        </footer>
    </body>
</html>
