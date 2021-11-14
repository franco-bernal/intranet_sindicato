<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/public/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap_v5_1_3.css') }}">
    <script src="{{ asset('js/public/java.js') }}"></script>
    <script src="{{ asset('js/jQuery_v3_6_0.js') }}"></script>
    <title>Unete!</title>
</head>

<body>

    <Div class="form-group">
        <form class="form-inline" role="form" method="POST" action="{{ route('solicitud.add') }}">
            @csrf
            <h3 style="text-align:center">SOLICITUD DE INCORPORACIÓN</h3>
            <br>
            <input class="form-control name=" name="nombre" type="text" required="required" placeholder="Nombre" title="nombre" style="width: 370px; height: 35px;" tabindex="1"> <br>
            <input class="form-control name=" name="apellido" type="text" required="required" placeholder="Apellido" title="apellido" style="width: 370px; height: 35px;" tabindex="2"><br>
            <div class="input-group">
                <input class="form-control name=" name="edad" type="text" required="required" placeholder="Edad" title="edad" style="width: 70px; height: 35px;" tabindex="3"> <br>
                <input class="form-control name=" name="rut" type="text" required="required" placeholder="Rut" title="rut" style="width: 190px; height: 35px;" tabindex="4"> <br>
            </Div>
            <br>
            <div class="input-group">
                <input class="form-control name=" name="estado_civil" type="text" required="required" placeholder="Estado Civil" title="estado civil" style="width: 150px; height: 35px;" tabindex="5"> <br>
                <input class="form-control name=" name="nacionalidad" type="text" required="required" placeholder="Nacionalidad" title="nacionalidad" style="width: 150px; height: 35px;" tabindex="6"> <br>
            </Div>
            <br>
            <input class="form-control name=" name="domicilio" type="text" required="required" placeholder="Domicilio" title="domicilio" style="width: 370px; height: 35px;" tabindex="7"> <br>
            <input class="form-control name=" name="negociacion" type="text" required="required" placeholder="Negociación" title="negociacion" style="width: 370px; height: 35px;" tabindex="8"> <br>

            <input class="form-control name=" name="fecha_ingreso_empresa" type="text" required="required" placeholder="Fecha ingreso empresa" title="Fecha ingreso empresa" style="width: 370px; height: 35px;" tabindex="9"> <br>
            <input class="form-control name=" name="area" type="text" required="required" placeholder="Area o sección de trabajo" title="area" style="width: 370px; height: 35px;" tabindex="10"> <br>
            <input class="form-control name=" name="telefono" type="text" required="required" placeholder="Teléfono" title="Telefono" style="width: 370px; height: 35px;" tabindex="11"><br>

            <input class="btn btn-light" type="submit" name="enviar" tabindex="12" value="Enviar">
            <input type="hidden" name="estado" value="1">

        </form>
    </Div>
    <br>
    <br>
    <div class="nota" style="text-align: justify">
        <p>Por intermedio de la presente, solicito a ustedes mi ingreso al <b>SINDICATO DE TRABAJADORES UNIFICADO CIC. S.A.</b> Comprometiéndome a respetar los estatutos que lo rigen, y cancelar las cuotas ordinarias mensualmente o cualquier descuento que sea con relación a los convenios que tenga el Sindicato con instituciones o casas comerciales las que serán deducidas de mi liquidación mensual.
            <b>NOTA:</b> “Para poder percibir los beneficios internos del sindicato, el socio deberá tener como mínimo 3 cuotas sindicales ingresadas en los fondos de la Organización” (3 meses de cotización).
            Independientemente de la fecha de ingreso al sindicato el socio debe cancelar las doce cuotas del año, para recibir una giftcard en las mismas condiciones que los socios antiguos.
        </p>
    </div>
</body>

</html>