<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_v5_1_3.css') }}">
    <script src="{{ asset('js/java.js') }}"></script>
    <script src="{{ asset('js/jQuery_v3_6_0.js') }}"></script>
    <title>Unete!</title>
</head>

<body>

    <Div class="formulario">
        <form class="form-inline" role="form" method="POST" action="{{ route('solicitud.add') }}">
            @csrf
            <h3>SOLICITUD DE INCORPORACIÓN</h3>
            <br>
            <input class="form-control" name="nombre" type="text" required="required" placeholder="Nombre" title="nombre" style="width: 370px; height: 35px;" tabindex="1"> <br>
            <input class="form-control" name="apellido" type="text" required="required" placeholder="Apellido" title="apellido" style="width: 370px; height: 35px;" tabindex="2"><br>
            <input class="form-control" name="rut" type="text" required="required" placeholder="Rut" title="rut" style="width: 370px; height: 35px;" tabindex="3"> <br>
            <input class="form-control" name="fec_ingreso" type="date" required="required" placeholder="Fecha ingreso empresa" title="Fecha ingreso empresa" style="width: 370px; height: 35px;" tabindex="5"> <br>
            <input class="form-control" name="area" type="text" required="required" placeholder="Area o sección de trabajo" title="area" style="width: 370px; height: 35px;" tabindex="6"> <br>
            <input class="form-control" name="tel" type="text" required="required" placeholder="Teléfono" title="Telefono" style="width: 370px; height: 35px;" tabindex="7"><br>

            <input class="btn btn-light" type="submit" name="enviar" tabindex="8" value="Enviar">
            <input type="hidden" name="estado" value="1">
            <!-- Mensaje de respuesta -->
            @if (Session::has('solicitud'))
            <div class="alert alert-error">{{Session::get('solicitud')}}</div>
            @endif
        </form>

    </Div>
</body>

</html>