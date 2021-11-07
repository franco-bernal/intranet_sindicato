<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_v5_1_3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lista.css') }}">


    <title>Revisa tus preguntas</title>
</head>

<body>
    <div>
        <img src="{{asset('img/logo-negro.png')}}" style="width: 300px; height: 100px;" alt="team member" class="img-responsive">

    </div>
    <header class="header">
        <div class="header__container">
            <div class="header__wrapper-mobile">
                <div class="header__logo-wrapper">
                    <a class="header__logo-link" href="#">SINDICATO DE TRABAJADORES UNIFICADO CIC S.A</a>
                </div>

                <div class="header__hamburger-wrapper">
                    <button class="hamburger-btn hamburger--collapse" id="hamburger" type="button">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                            <div class="hamburger-inner"></div>
                            <div class="hamburger-inner"></div>
                        </div>
                    </button>
                </div>
            </div>

            <nav class="header__nav show-nav">
                <ul class="header__nav-list">
                    <li class="header__nav-list-item"><a class="header__nav-link" href="#">NOTICIAS</a></li>
                    <li class="header__nav-list-item"><a class="header__nav-link" href="#">CONOCENOS</a></li>
                    <li class="header__nav-list-item"><a class="header__nav-link" href="#">UNETE</a></li>
                    <li class="header__nav-list-item"><a class="header__nav-link" href="#">LOGIN</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <div class="table-responsive">
        <br>
        <br>
        <br>
        <br>
        <h1>Revisa tus preguntas!</h1>
        <br>
        <br>
        <!-- inicio de tabla para ver preguntas -->
        <table class="table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rut</th>
                    <th>Area</th>
                    <th>Teléfono</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultadoPreguntas as $verpregunta)
                <tr>
                    @if($verpregunta->nombre==' ')
                    <td>{{ $verpregunta->nombre}}</td>
                    @else
                    <td>{{ $verpregunta->nombre}} </td>
                    @endif
                    <td>{{ $verpregunta->apellido}}</td>
                    <td>{{ $verpregunta->rut}}</td>
                    <td>{{ $verpregunta->area}}</td>
                    <td>{{ $verpregunta->telefono}}</td>
                    <td>{{ $verpregunta->descripcion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>

    </div>
    <script src="{{ asset('js/jQuery_v3_6_0.js') }}"></script>
    <script src="{{ asset('js/java.js') }}"></script>
</body>

</html>