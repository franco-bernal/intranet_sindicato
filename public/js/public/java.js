function ConvertirTexto(cadena) {
    resultado = '';

    for (var i = 0; i < cadena.length; i++) {
        letra = cadena.charAt(i);
        resultado += '<span class="ta-letra ">' + letra + '</span>';
    }
    return resultado;
}

/* function agregada a jQuery fn.Convertir para convertir los contenido html al formato deseado usando la funcion ConvertirTexto. Devuelve el total de caracteres trabajados*/
jQuery.fn.Convertir = function() {
    /*por cada elemento que se encuentre se realiza lo siguiente:*/
    this.each(function(i) {
        /*Capturamos el numero de caracteres*/
        largo = $(this).html().length;
        /* convertimos el contenido html al formato deseado y lo regresamos otra vez como contenido html */
        $(this).html(ConvertirTexto($(this).html()));

    });
    return largo;
};

$(document).ready(function() {
    letra1 = 1; /*Estas variables son necesarias para la funcion Animar1. Indican cual será el primer carater que se muestre*/
    tam1 = $('#text-animation1').Convertir();
    setInterval(Animar1, 95);


});


/* fuencion que va mostrando las letras */
function Animar1() {

    if (letra1 <= tam1) {
        $('#text-animation1 .ta-letra:nth-child(' + letra1 + ')').css('color', '#000000');
        letra1++;
    }
}