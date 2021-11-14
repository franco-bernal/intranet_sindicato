<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/bootstrap_v5_1_3.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/public/landing.css') }}">
    <title>HOME</title>
</head>

<body>

    <!--<Div class="formulario">
        <form class="form-inline" role="form" method="POST" action="{{ route('preguntas.add') }}">
            @csrf
            <h1>¿TIENES DUDAS?</h1>
            <h2>Envia tus consultas!</h2>
            <br>
            <input class="form-control name=" name="rut" type="text" required="required" placeholder="Rut" title="rut" style="width: 370px; height: 35px;" tabindex="1"> <br>
            <input class="form-control name=" name="nombre" type="text" required="required" placeholder="Nombre" title="nombre" style="width: 370px; height: 35px;" tabindex="2"> <br>
            <input class="form-control name=" name="apellido" type="text" required="required" placeholder="Apellido" title="apellido" style="width: 370px; height: 35px;" tabindex="3"><br>
            <input class="form-control name=" name="area" type="text" required="required" placeholder="Area o sección de trabajo" title="area" style="width: 370px; height: 35px;" tabindex="4"> <br>
            <input class="form-control name=" name="telefono" type="text" required="required" placeholder="Teléfono" title="Telefono" style="width: 370px; height: 35px;" tabindex="5"><br>
            <textarea class="form-control name=" name="descripcion" rows="4" required="required" placeholder="Mensaje" style="width: 370px; height: 100px;" tabindex="6"></textarea> <br>
            <input class="btn btn-light" type="submit" name="enviar" tabindex="7" value="Enviar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" tabindex="8" class="btn btn-light" value="Borrar">
            <input type="hidden" name="estado" value="1">

        </form>
        </form>
    </Div>-->
    <header>

        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    SINDICATO DE TRABAJADORES UNIFICADO CIC S.A
                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <div class="nav-links">
                <a href="{{ url('/login') }}" target="_blank">Login</a>
                <a href="{{ url('/') }}" target="_blank">Contacto</a>
            </div>
        </div>
        <div>
            <img src="{{asset('img/logo-negro.png')}}" style="width: 200px; height: 90px;" class="img-responsive">
        </div>
    </header>
    <!-- slick -->
    <div class="slick" align="center">
        <div><img width="650" height="200" src="https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""> </div>
        <div><img width="650" height="200" src="https://images.pexels.com/photos/158780/leaf-nature-green-spring-158780.jpeg?cs=srgb&dl=pexels-pixabay-158780.jpg&fm=jpg" alt=""> </div>
        <div><img width="650" height="200" src="https://images.pexels.com/photos/6775386/pexels-photo-6775386.jpeg?cs=srgb&dl=pexels-ben-mack-6775386.jpg&fm=jpg" alt=""> </div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.slick').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 2800,
                centerMode: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ],
            });
        });
    </script>
    <div class="somos">
        <section>
            <div class="qsomos"><span>QUIENES SOMOS!</span><span>SINDICATO DE TRABAJADORES UNIFICADO CIC S.A</span></div>
        </section>
        <div class="texto" style="text-align: justify">
            <p>Guess it's true, I'm not good at a one-night stand
                But I still need love cause I'm just a man
                These nights never seem to go to plan
                I don't want you to leave, will you hold my hand?
                Oh, won't you stay with me?
                Cause you're all I need
                This ain't love it's clear to see
                But darling, stay with me
                Why am I so emotional?
                No it's not a good look, gain some self control
                And deep down I know this never works
                But you can lay with me so it doesn't hurt
                Oh, won't you stay with me?
                Cause you're all I need
                This ain't love it's clear to see
                But darling, stay with me
                Oh, won't you stay with me?
                Cause you're all I need
                This ain't love it's clear to see
                But darling, stay with me
                Oh, won't you stay with me?
                Cause you're all I need
                This ain't love it's clear to see
                But darling, stay with me
            </p>
            <div class="linea"></div>
        </div>
        <div>
            <section>
                <div class="directiva"><span>DIRECTIVA</span><span>SINDICATO DE TRABAJADORES UNIFICADO CIC S.A</span></div>
            </section>
            <div class="texto1">
                <p>Edgardo Matus Mora • Presidente </p>
                <p>Ramón Sanchez Yañez • Tesorero</p>
                <p>Jorge Guajardo Araya • Secretario </p>
                <p> Nazaret Honorato Castillo • Director </p>
                <p> Daniel Gonzalez Villa •Director </p>
                <div class="linea1"></div>
            </div>
            <br>
            <br>
            <div class="solicitud">
                <h2>Solicitud de incorporación</h2> <br>
                <a href="{{ url('/Registro') }}" target="_blank" class="btn btn-outline-warning btn-lg" role="button" aria-disabled="true">REGISTRATE!</a>
            </div>
        </div>
        <br>
        <br>
        <div class="contrato">
            <div class="col-2 titulo">
                <h1 id="text-animation1">DESCARGA AQUI NUESTRO CONTRATO COLECTIVO</h1>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="copyright">
            <p>&copy; 2021 EQUINOX SERVICES</p>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/public/java.js') }}"></script>
</body>

</html>