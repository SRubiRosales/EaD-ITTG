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
                        <a chref="{{ url('/') }}">Inicio</a>
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
                    <li class="dropdown">
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
                    <button class="btn btn-outline-primary" type="submit">
                        Iniciar Sesión
                        <span><img src="{{ asset('imgs/login.png') }}" alt="Login"></span>
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
                <li class="breadcrumb-item active" aria-current="page">Oferta Educativa</li><!--Punto 2-->
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
       <h1>Solo sigue estos pequeños pasos</h1> <!-- Título -->
        <h3 class="flex-center">Necesitas ayude, pregunta por los horarios de atención, y ven con nosotros.</h3> 
        <!-- Imagen --> 
        <img target="_blank" src="{{ asset('imgs/pasos.jpeg') }}" alt="pasos" width="50%" style="margin-left: 250px; float: center;">   
        <div class="page">
            <br><br><br> 
            <h1>Conoce todas nuestras sedes</h1>
            <!-- Card con la información básica de cada una de nuestras sedes -->
            <div class="card-group">
                        <div class="card">
                            <!-- Imagen de la sede o municipio en el que se encuentra -->
                            <img src="{{ asset('imgs/ittg.jpg') }}" class="card-img-top" alt="ittg" width="100%">
                            <div class="card-body">
                            <!-- Imágenes y texto que conforman la estructura básica de la información de contacto -->
                            <h5 class="card-title"><h2 class="">Sede Tuxtla Gutiérrez</h2>
                            <p>KM 29020, Carr. Panamericana 1080, Boulevares, 29050 Tuxtla Gutiérrez, Chis <br> 
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/4VjyF4t9Hqt.png?_nc_eui2=AeETwqjvH4NJPpzdIWxqfGCyn8BlgvApJHWGADjZ5Mllp1LBV6az9BLbTFJ1op2-CAgxyJHED2DApKkSInAZt1VdJP06cXC5shqJDEP5WFvrrA" alt=""> Llamanos al 61 5 62 52 <br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/vKDzW_MdhyP.png?_nc_eui2=AeE2DyMgL_fGNYCubBm_MgLVicC3nRh6tgOgH5YjlpFR9l2iOxbjrQZoonFqb97HJ39lRaTktI9kcnsdQWV6p5tuH4fFlegz6QAN8WuMaC9vXg" alt=""> Hablanos contacto@ittg.edu.mx<br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/uknIbAjicIZ.png?_nc_eui2=AeGcM__xBwLOpFePXW98PH-TI673RnsqLIp88pN5EemXkF1ldnCxYaBEK06lL91HU93O-WKq1XaoCKobCpWRkfn_3W6pao0no4aljRPT31El_g" alt=""> 
                            <!-- Enlace a la página de facebook de la sede -->
                            <a class="text-right" href="https://www.facebook.com/pg/edittg.web/about/?ref=page_internal">Contáctanos vía FB</a> </p>
                            </div>
                        </div>
                        <div class="card">
                        <img src="{{ asset('imgs/concordia.jpg') }}" class="card-img-top" alt="ittg" width="100%">
                            <div class="card-body">
                            <h5 class="card-title"><h2>Sede Concordia</h2>
                            <p>Calle CHIAPAS SOLIDARIO,  Colonia ZONA URBANA La Concordia, La Concordia, Chiapas, México, C.P. 30360<br> 
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/4VjyF4t9Hqt.png?_nc_eui2=AeETwqjvH4NJPpzdIWxqfGCyn8BlgvApJHWGADjZ5Mllp1LBV6az9BLbTFJ1op2-CAgxyJHED2DApKkSInAZt1VdJP06cXC5shqJDEP5WFvrrA" alt=""> Llamanos al 01 992 63 647 93 <br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/vKDzW_MdhyP.png?_nc_eui2=AeE2DyMgL_fGNYCubBm_MgLVicC3nRh6tgOgH5YjlpFR9l2iOxbjrQZoonFqb97HJ39lRaTktI9kcnsdQWV6p5tuH4fFlegz6QAN8WuMaC9vXg" alt=""> Hablanos cresudlaconcordia@gmail.com <br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/uknIbAjicIZ.png?_nc_eui2=AeGcM__xBwLOpFePXW98PH-TI673RnsqLIp88pN5EemXkF1ldnCxYaBEK06lL91HU93O-WKq1XaoCKobCpWRkfn_3W6pao0no4aljRPT31El_g" alt=""> 
                            <a class="text-right" href="https://www.facebook.com/Educación-a-Distancia-La-Concordia-Ittg-201767440358752/">Contáctanos vía FB</a> </p>
                        </div>
            </div>
            <div class="card-group">
                        <div class="card">
                        <img src="{{ asset('imgs/acala.png') }}" class="card-img-top" alt="ittg" width="100%">
                            <div class="card-body">
                            <h5 class="card-title"><h2>Sede Acala</h2>
                            <p>Avenida Grijalva 5020 CP. 29372 Acala, Mexico, Barrio San José <br> 
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/4VjyF4t9Hqt.png?_nc_eui2=AeETwqjvH4NJPpzdIWxqfGCyn8BlgvApJHWGADjZ5Mllp1LBV6az9BLbTFJ1op2-CAgxyJHED2DApKkSInAZt1VdJP06cXC5shqJDEP5WFvrrA" alt=""> Llamanos al ¿?<br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/vKDzW_MdhyP.png?_nc_eui2=AeE2DyMgL_fGNYCubBm_MgLVicC3nRh6tgOgH5YjlpFR9l2iOxbjrQZoonFqb97HJ39lRaTktI9kcnsdQWV6p5tuH4fFlegz6QAN8WuMaC9vXg" alt=""> Hablanos ¿?<br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/uknIbAjicIZ.png?_nc_eui2=AeGcM__xBwLOpFePXW98PH-TI673RnsqLIp88pN5EemXkF1ldnCxYaBEK06lL91HU93O-WKq1XaoCKobCpWRkfn_3W6pao0no4aljRPT31El_g" alt=""> 
                            <a class="text-right" href="https://www.facebook.com/sedeacala.ittg.5?sk=about&section=contact-info&lst=100001723204048%3A100026298638407%3A1585804691">Contáctanos vía FB</a> </p>
                        </div>
            </div>
                        <div class="card">
                            <img src="{{ asset('imgs/siltepec.jpg') }}" class="card-img-top" alt="ittg" width="100%">
                            <div class="card-body">
                            <h5 class="card-title"><h2>Sede Siltepec</h2>
                            <p>Vega del Rosario, Siltepec, Chis.<br> 
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/4VjyF4t9Hqt.png?_nc_eui2=AeETwqjvH4NJPpzdIWxqfGCyn8BlgvApJHWGADjZ5Mllp1LBV6az9BLbTFJ1op2-CAgxyJHED2DApKkSInAZt1VdJP06cXC5shqJDEP5WFvrrA" alt=""> Llamanos al ¿?<br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/vKDzW_MdhyP.png?_nc_eui2=AeE2DyMgL_fGNYCubBm_MgLVicC3nRh6tgOgH5YjlpFR9l2iOxbjrQZoonFqb97HJ39lRaTktI9kcnsdQWV6p5tuH4fFlegz6QAN8WuMaC9vXg" alt=""> Hablanos ¿?<br>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/uknIbAjicIZ.png?_nc_eui2=AeGcM__xBwLOpFePXW98PH-TI673RnsqLIp88pN5EemXkF1ldnCxYaBEK06lL91HU93O-WKq1XaoCKobCpWRkfn_3W6pao0no4aljRPT31El_g" alt=""> 
                            <a class="text-right" href="https://www.facebook.com/marisol.anzuetoroblero/about?section=overview&lst=100001723204048%3A100035279287711%3A1585867716">Contáctanos vía FB</a> </p>
                        </div>
            </div>
                <!--<div class="mitad-izquierda">
                    <h2>Sede Tuxtla Gutiérrez</h2>
                    <img  class="flex-center" target="_blank" src="{{ asset('imgs/ittg.jpg') }}" alt="ittg" width="60%">

                    <br><br><br><br>
                    <h2>Dirección</h2>
                    <p>La Concordia, Chis. <br> 
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/4VjyF4t9Hqt.png?_nc_eui2=AeETwqjvH4NJPpzdIWxqfGCyn8BlgvApJHWGADjZ5Mllp1LBV6az9BLbTFJ1op2-CAgxyJHED2DApKkSInAZt1VdJP06cXC5shqJDEP5WFvrrA" alt=""> Llamanos al 01 992 63 647 93 <br>
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/vKDzW_MdhyP.png?_nc_eui2=AeE2DyMgL_fGNYCubBm_MgLVicC3nRh6tgOgH5YjlpFR9l2iOxbjrQZoonFqb97HJ39lRaTktI9kcnsdQWV6p5tuH4fFlegz6QAN8WuMaC9vXg" alt=""> Hablanos cresudlaconcordia@gmail.com <br>
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/uknIbAjicIZ.png?_nc_eui2=AeGcM__xBwLOpFePXW98PH-TI673RnsqLIp88pN5EemXkF1ldnCxYaBEK06lL91HU93O-WKq1XaoCKobCpWRkfn_3W6pao0no4aljRPT31El_g" alt=""> 
                    <a class="text-right" href="https://www.facebook.com/Educación-a-Distancia-La-Concordia-Ittg-201767440358752/">Contáctanos vía FB</a> </p>
                </div>
                <div class="mitad-derecha">
                    <br><br><br>
                    

                    <br><br><br>
                    <h2 style="text-align: center;">Sede Concordia</h2>
                    <img style="float: right;" class="flex-center" target="_blank" src="{{ asset('imgs/concordia.jpg') }}" alt="concordia" width="60%">
                </div>
            </div>-->
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
