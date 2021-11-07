<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_v5_1_3.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

    <!-- <div class="slick" align="center">  
        <div><img width="700" height="200" src="https://images.pexels.com/photos/3207527/pexels-photo-3207527.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
        <div><img width="700" height="200" src="https://images.pexels.com/photos/3207527/pexels-photo-3207527.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
        <div><img width="700" height="200" src="https://images.pexels.com/photos/3207527/pexels-photo-3207527.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
    </div> -->
    <!-- <script src="{{ asset('js/java.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jQuery_v3_6_0.js') }}"></script> -->
    <!-- <script src="{{ asset('js/java.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.slick').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 2,
                dots: true,
                arrows: true,
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
    </script> -->
</body>

</html>