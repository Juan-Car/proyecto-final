<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>    
    <body>        
        <header>
            <div class="contenedor">
                <h1 class="icon-dog">DOG-TORS</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>
                <nav class="menu" >
                @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}">inicio</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                
            @endif
                </nav>
            </div>
        </header>
        <main>
            <section id="banner">
                <img src="img/dog-838281_1920.jpg">
                <div class="contenedor">
                    <h2>Mascotas y niños felices</h2>
                    <p>Cual es la mejor mascota para usted.?</p>
                    <a href="#">Leer más</a>
                </div>
            </section>
            <section id="bienvenidos">
                <h2>BIENVENIDOS A NUESTRO BLOG DE MASCOTAS &#x1f43e;</h2>
                <p>La GRANDEZA de una Nacion y su progreso moral pueden ser juzgados por la forma en que sus animales son tratados</p>
            </section>
            <section id="blog">
                <h3>Lo último de nuestro Blog</h3>
                <div class="contenedor">
                    <article>
                        <img src="img/ali.jpg">
                        <h4>La mejor alimentación para tu mascota</h4>
                    </article>
                    <article>
                        <img src="img/adiestra.jpg">
                        <h4>Adiestramiento para tu mascota</h4>
                    </article>
                    <article>
                        <img src="img/famosos.jpg">
                        <h4>Los perros mas famosos  de Instagram</h4>
                    </article>
                </div>
            </section>
            <section id="info">
                <h3>Cada especie es una obra maestra, una creación hecha con extremo cuidado y genio. </h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <img src="img/hare-4375952_640.jpg" alt="">
                        <h4>Bugs bunny</h4>
                    </div>
                    <div class="info-pet">
                        <img src="img/cat%20inf-2.jpg" alt="">
                        <h4>Fred</h4>
                    </div> 
                    <div class="info-pet">
                        <img src="img/in-3.jpg" alt="">
                        <h4>Max</h4>
                    </div>
                    <div class="info-pet">
                        <img src="img/inf-4.jpg" alt="">
                        <h4>Aaron</h4>
                    </div>           
                </div>
            </section>
        </main>
        <footer>
            <div class="contenedor">
                <p class="copy">DOG-THOR &copy; 2019</p>
                <div class="sociales">
                    <a class="icon-facebook" href="#"></a>  
                    <a class="icon-twitter" href="#"></a>   
                    <a class="icon-instagram" href="#"></a>
                    <a class="icon-google" href="#"></a>          
                </div>          
            </div>
        </footer>
    </body>
</html>
