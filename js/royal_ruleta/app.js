// variable de intervalo de lanzar gelatinas
var lanzaGelatina;
var ultimo = true;

var numeroGelatina = 1;
var animGelatinasActive = 1;
var gelatinaPremio = 1;
var gelPremio = getRandomInt(0, 4);

var pruebas  = 0;
var ganapremio = 0;

var sabores = [];

//funciones scriptcam
$(document).ready(function () {
    iniciaFormulario()
    //llamada para mostrar webcam en div, incluye botones
    crearBotonesInterface();
});

/// fin actividad gelatinas
function animGelatina(x, animationDiv) {
    $(animationDiv).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
    });
};

$(document).ready(function () {
    if (pruebas== 1){
        var anim = "crossscreen";
        animGelatinas(anim, "#animationGelatina1");
    }

    $('.js--triggerAnimation1').click(function (e) {

        $('#animationSandbox').removeClass();
        e.preventDefault();
        animGelatinasActive = 0;
    });

    $('.js--triggerAnimation2').click(function (e) {
        setTimeout(disparaDetener, 1000)
    });
});

function animGelatinas() {
    var anim = "crossscreen";

    lanzaGelatina = setInterval(lanzaGelatinas, 250);
}

function disparaDetener() {
    console.log("envio a detener");

    window.clearInterval(lanzaGelatina)
}

function lanzaGelatinas() {
    if (animGelatinasActive == 1) {
        var gelatinas = ["snoopy-juego\/cereza.png", "snoopy-juego\/frambuesa.png", "snoopy-juego\/limon.png", "snoopy-juego\/uva.png", "snoopy-juego\/naranja.png"];
        var divSeleccion = getRandomInt(0, 4);
        var nuevaGelatina = '<span id="animationGelatina' + numeroGelatina + '"><img ' +
            'src="imagenes\/royal_ruleta\/' + gelatinas[divSeleccion] + '"' +
            'class="img-responsive"/></span>';
        $(".contenedorGelatina").append(nuevaGelatina);
        var anim = "crossscreen";
        animGelatina(anim, "#animationGelatina" + numeroGelatina);
        numeroGelatina = numeroGelatina + 1;
    } else {
        if (ultimo) {
            var gelatinas = ["snoopy-juego\/cereza.png", "snoopy-juego\/frambuesa.png", "snoopy-juego\/limon.png", "snoopy-juego\/uva.png", "snoopy-juego\/naranja.png"];
            if (ganapremio == 1) {
                var divSeleccion = gelPremio;
            } else {
                do {
                    var divSeleccion = getRandomInt(0, 4);
                }
                while (isInArray(divSeleccion, sabores));
                // ponemos los sabores que salen
                sabores.push(divSeleccion);
            }

            var nuevaGelatina = '<span id="animationGelatina' + numeroGelatina + '"><img ' +
                'src="imagenes\/royal_ruleta\/' + gelatinas[divSeleccion] + '"' +
                'class="img-responsive"/></span>';
            $(".contenedorGelatina").append(nuevaGelatina);
            var anim = "crossscreen" + gelatinaPremio;
            gelatinaPremio++;
            animGelatina(anim, "#animationGelatina" + numeroGelatina);
            numeroGelatina = numeroGelatina + 1;
            //ultimo = false;
            animGelatinasActive = 1;
            if (gelatinaPremio > 3) {
                ultimo = false;
                animGelatinasActive = 0;

            }
        }
    }
}
// fin actividad gelatinas

/**
 * Returns a random integer between min (inclusive) and max (inclusive)
 * Using Math.round() will give you a non-uniform distribution!
 */

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function iniciaFormulario() {
    $("#cedula").change(function () {
        verificarParticipante($("#cedula").val());
    });

    $("#registroform").submit(function (event) {
            //si campos registro no estan visibles y estan llenos por recarga pagina los mostramos
            if ($('#complete_register').is(':visible')) {
                var url = accion + controladorApp + "/register";
                $.ajax({
                        url: url,
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        DataType: "jsonp",
                        success: function (data) {
                            $.post(accion + controladorApp + "/validarCodigo", {codigo: $('#box-codigo1').val()})
                                .done(function (data) {
                                    if (data == 'F') {
                                        mostrarCodigoErrado()
                                    } else {
                                        mostrarCodigoCorrecto(data)
                                    }
                                });


                        }
                    }
                )
                ;
            }
            else {
                $('#complete_register').removeClass("hidden").show();
                $('.portabotones').removeClass("hidden").show();

            }


            event.preventDefault();
            return false;
        }
    )
    ;

    $("#formuploadvideo").submit(function (event) {

        //ocultamos el boton y mostramos el loader
        $('.loader-lineal').removeClass("hidden").show();
        $('.btn-subir-video').hide();

        var url = accion + controladorApp + "/uploadvideo";

        $.ajax({
            url: url,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                // error =   data.split(':');
                //if (error[0] = 'false'){
                //  alert ("Error : " +  error[1])
                //} else {
                nombreArchivoSubido = data;
                var nuevovideo = '<video id="videoSubido" width="100%" controls="" autoplay="">' +
                    '<source src="' + accion + 'videos/' + nombreArchivoSubido + '" type="video/mp4">' +
                    'Su navegador no soporta video HTML5.' +
                    '</video>';
                $('.videoSubido').html(nuevovideo);
                setTimeout(callbackFunction, 3000);
                $('.formuploadenvio').removeClass("hidden").show();
                $('.formuploadfile').hide();
                //}
            }
        });
        event.preventDefault();
        return false;
    });

}

function verificarParticipante(cedula) {
    $.post(accion + controladorApp + "/verificarParticipante", {cedula: cedula})
        .done(function (data) {
            if (data == 'F') {
                mostrarFormRegistro()
            } else {
                mostrarFormCompleto(data)
            }
        });
}

function mostrarFormRegistro() {
    $('#complete_register').removeClass("hidden").show();
    $('.portabotones').removeClass("hidden").show();
    $('#nombre').val("");
    $('#apellido').val("");
    $('#mail').val("");
    $('#telefono').val("");
    $('#ciudad').val("");
}

function mostrarFormCompleto(data) {
    $('#complete_register').removeClass("hidden").show();
    $('.portabotones').removeClass("hidden").show();
    var data = JSON.parse(data);
    $('#nombre').val(data['nombre']);
    $('#apellido').val(data['apellido']);
    $('#mail').val(data['mail']);
    $('#telefono').val(data['telefono']);
    $('#ciudad').val(data['ciudad']);
}


function mostrarCodigoErrado() {
    $('#mensaje-envio').html("Código Incorrecto");
}
function mostrarCodigoCorrecto(data) {
    obj = JSON.parse(data);
    if (obj.id_premio == 1) {
        ganapremio = 0;
    } else {
        ganapremio = 1;
    }
    ocultarTodosSeccion();
    $('#home').removeClass("hidden").show();
    var anim = "crossscreen";
    animGelatinas(anim, "#animationGelatina1");
}

function crearBotonesInterface() {
    $('#btnvalidacodigo').click(function () {
        //validamos si se ingreso el codigo
        if ($('#box-codigo1').val() != '') {
            $.post(accion + controladorApp + "/validarCodigo", {codigo: $('#box-codigo1').val()})
                .done(function (data) {
                    if (data == 'F') {
                        mostrarCodigoErrado()
                    } else {
                        mostrarCodigoCorrecto(data)
                    }
                });
        } else {
            $('.textoIngresoLote').removeClass("hidden").show();
            setTimeout(function () {
                $('.textoIngresoLote').fadeOut()
            }, 3000)
            // $('.textoIngresoLote').hide();
        }

    })


    $('#btnRegresarIntento').click(function () {
        $('#ingresolote-container').removeClass("hidden").show();
        $('#mensaje-error').hide();
    })


    ///////////////////////////


    $('.btn-home-instrucciones').click(function () {
        ocultarTodosSeccion();
        $("#instrucciones").removeClass("hidden").show();
    })

}

function ocultarTodosSeccion() {
    $('.seccion').hide();
}

function isInArray(value, array) {
    return array.indexOf(value) > -1;
}
