// variable de intervalo de lanzar gelatinas
var lanzaGelatina;
var ultimo = true;
var idvalidador = '';
var primeravez = 1;

var numeroGelatina = 1;
var animGelatinasActive = 1;
var gelatinaPremio = 1;
var gelPremio = getRandomInt(0, 4);

var pruebas = 0;
var ganapremio = 1;
var premioganado = 1;

//pausa en el juego
var pausa = false;
var tiempoPausa = 3000;

var divSeleccion

var seguirFormulario = 1;

var sabores = [];
var gelatinas = ["gelatina_cereza", "gelatina_frambuesa", "gelatina_limon", "gelatina_uva", "gelatina_naranja"];
//var gelatinas = ["snoopy-juego\/cereza.png", "snoopy-juego\/frambuesa.png", "snoopy-juego\/limon.png", "snoopy-juego\/uva.png", "snoopy-juego\/naranja.png"];
var gelatinasNombre = [" CEREZA", " FRAMBUESA", " LIMÓN", " UVA", " NARANJA"];
var backgroundAudio;
var audioOnOff = 1;

window.onload = function () {

    backgroundAudio = document.getElementById("bgAudio");
    backgroundAudio.volume = 0.2;
//    backgroundAudio.volume = 0;
    backgroundAudio.src = "linus-and-lucy_part_1.mp3"
}

//funciones scriptcam
$(document).ready(function () {
    // si se usa el internet explorer 8 0 7 no funciona
    if ((navigator.appVersion.indexOf("MSIE 7.") != -1) || (navigator.appVersion.indexOf("MSIE 8.") != -1)) {
        $('#registro').hide();
        $('#internet-explorer').removeClass("hidden").show();
    }
    iniciaFormulario()
    //llamada para mostrar webcam en div, incluye botones
    crearBotonesInterface();

    //$("#cedula").mask("9999999999");
    $("#box-codigo1").mask("99 999 99:99");
    //$("#telefono").mask("9999999999");
});


/// fin actividad gelatinas
function animGelatina(x, animationDiv) {
    $(animationDiv).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
    });

};

$(document).ready(function () {
    if (pruebas == 1) {
        var anim = "crossscreen";
        animGelatinas(anim, "#animationGelatina1");
        ganapremio = 1;
        premioganado = 2;
    }
    $('.js--triggerAnimation1').click(function (e) {
        if (!pausa) {
            e.preventDefault();
            animGelatinasActive = 0;
            $('.js--triggerAnimation1').removeClass('boton-juego').addClass('boton-juego-click');
            setTimeout(function () {
                $('.js--triggerAnimation1').removeClass('boton-juego-click').addClass('boton-juego');
                if (ultimo) {
                    $('.flecha_animada').fadeIn()
                    setTimeout(function () {
                        $('.flecha_animada').fadeOut()
                    }, 3000)

                }
            }, 800)
        }
    });

    //evento instrucciones
    $('.js--triggerInstrucciones').click(function (e) {
        e.preventDefault();
        $('#instrucciones').removeClass('hidden').show();
        //$('#home').removeClass('hidden').hide();
    });

    //evento instrucciones inicio
    $('.js--triggerInstruccionesInicio').click(function (e) {
        e.preventDefault();
        $('.texto-info').hide();
        //$('.espacio74 ').removeClass('hidden').fadeIn();
        $('.espacio74 ').removeClass('hidden').fadeIn();
    });

    $('#instrucciones').click(function (e) {
        e.preventDefault();
        $('#instrucciones').removeClass('hidden').fadeOut();
    });


    $('.ganacamiseta .btn-pierde2, .ganagorra .btn-pierde2, .ganaentrada .btn-pierde2, .ganacuaderno .btn-pierde2, .pierde .btn-pierde2').click(function (e) {
        e.preventDefault();
        window.open('https://www.facebook.com/RoyalEcuador/', '_blank');
    });

    $('.ganacamiseta .btn-pierde3, .ganagorra .btn-pierde3, .ganaentrada .btn-pierde3,.ganacuaderno .btn-pierde3, .pierde .btn-pierde3').click(function (e) {
        e.preventDefault();
        // evito que se repita la cedula
        var str = window.location.href;
        var n = str.search($('#cedula').val());

        if (n > 0) {
            window.location.replace(window.location.href)
        } else {
            window.location.replace(window.location.href + $('#cedula').val())
        }
//        location.reload(true);
    });

    var str = window.location.href;
    var res = str.split("/");
    var resol = res[res.length - 1]
    if (resol.length > 0) {
        $('.js--triggerInstruccionesInicio').click();
        $('#cedula').val(resol);
        verificarParticipante(resol);
    } else {
        //no hacemos nada ;
    }

    $('#example').popover('hide');


    //animacion parpadeo
    setInterval(function () {
        $('.pestaneo1').show();
        setTimeout(function () {
            $('.pestaneo1').hide();
        }, 250)
    }, 3000)

    setInterval(function () {
        $('.pestaneo2').show();
        setTimeout(function () {
            $('.pestaneo2').hide();
        }, 250)
    }, 4000)
    setInterval(function () {
        $('.pestaneo3').show();
        setTimeout(function () {
            $('.pestaneo3').hide();
        }, 250)
    }, 5000)


    $('.js--triggerAudio').click(function () {
        if (audioOnOff == 1) {
            audioOnOff = 0
            backgroundAudio.volume = 0;
            $('.js--triggerAudio').addClass('btn-audioOff').removeClass('btn-audioOn')
        } else {
            audioOnOff = 1
            backgroundAudio.volume = 0.2;
            $('.js--triggerAudio').addClass('btn-audioOn').removeClass('btn-audioOff')

        }

    });

    $('.js--ingresaotrocodigo').click(function () {
        location.reload(true);
        /*        ultimo = true;
         primeravez = 0;
         numeroGelatina = 1;
         animGelatinasActive = 1;
         gelatinaPremio = 1;
         gelPremio = getRandomInt(0, 4);

         ganapremio = 1;
         premioganado = 1;

         //pausa en el juego
         pausa = false;
         tiempoPausa = 4000;
         backgroundAudio.src = "linus-and-lucy_part_1.mp3"


         $('.home').fadeIn();
         $('.pierde').hide();
         $('.ganacamiseta').hide();
         $('.ganagorra').hide();
         $('.ganaentrada').hide();
         $('.fanpage').hide();
         $('.snoopy-juego-feliz').hide();
         $('.snoopy-juego').show();
         $("span.crossscreen1, span.crossscreen2, span.crossscreen3, .gelatinas").remove();

         $('#home').fadeOut();
         $('#instrucciones').fadeOut();
         $('#registro').fadeIn();
         $('#box-codigo1').val("")*/

    });

    $( "#box-codigo1" ).focus(function() {
        $( ".poplote" ).fadeIn();
    }).focusout(function() {
        $( ".poplote" ).fadeOut();
    });



});


function animGelatinas() {
    var anim = "crossscreen";
    lanzaGelatina = setInterval(lanzaGelatinas, 250);
}


function lanzaGelatinas() {
    if (!pausa) {
        //borramos las gelatinas no vistas
        if (numeroGelatina > 12) {

            $("span.borraGelatina" + (numeroGelatina - 12)).remove();
        }

        if (animGelatinasActive == 1) {
            divSeleccion = getRandomInt(0, 4);
            var nuevaGelatina = '<span id="animationGelatina' + numeroGelatina + '">' +
                '<div class="' + gelatinas[divSeleccion] + '" ><\/div>' +
                    //'<img  src="imagenes\/royal_ruleta\/' + gelatinas[divSeleccion] + '"' + 'class="img-responsive"/>' +
                '</span>';
            $(".contenedorGelatina").append(nuevaGelatina);
            var anim = "crossscreen";
            animGelatina(anim, "#animationGelatina" + numeroGelatina);
            $("#animationGelatina" + numeroGelatina).addClass('borraGelatina' + numeroGelatina);
            $("#animationGelatina" + numeroGelatina).addClass('gelatinas');
            numeroGelatina = numeroGelatina + 1;
        } else {
            if (ultimo) {
                if (ganapremio == 1) {
                    divSeleccion = gelPremio;
                } else {
                    do {
                        divSeleccion = getRandomInt(0, 4);
                    }
                    while (isInArray(divSeleccion, sabores));
                    // ponemos los sabores que salen
                    sabores.push(divSeleccion);
                }

                var nuevaGelatina = '<span id="animationGelatina' + numeroGelatina + '">' +
                    '<div class="' + gelatinas[divSeleccion] + '" ><\/div>' +
//                    '<img  src="imagenes\/royal_ruleta\/' + gelatinas[divSeleccion] + '"' + 'class="img-responsive"/> +'
                    '</span>';
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
                    //mostramos snoopy ganador

                    if (ganapremio > 0) {
                        setTimeout(function () {
                            $(".snoopy-juego-feliz").removeClass("hidden").fadeIn();
                            $(".snoopy-juego").fadeOut();
                        }, 1500)
                    }

                    setTimeout(function () {
                        cierre()
                    }, 3000)

                }
                // activamos la pausa
                pausa = true;
                //mostramos mensaje
                setTimeout(function () {
                    mostraMensajeSeleecion()
                }, 1200)
                // esperamos para continuar
                setTimeout(function () {
                    continuaJuego()
                }, tiempoPausa)
            }
        }
    }
}
// fin actividad gelatinas


function continuaJuego() {
    pausa = false;
}

function mostraMensajeSeleecion() {

    muestra = gelatinaPremio - 1;
    textoOriginal = $('.mensajeSeleccion' + muestra + " .titulo").html() + gelatinasNombre[divSeleccion];
    //$('.mensajeSeleccion' + muestra + " .titulo").html(textoOriginal );
    // $('.mensajeSeleccion' + muestra).removeClass("hidden").fadeIn();
    // esperamos para continuar
    setTimeout(function () {
        ocultaNube('.mensajeSeleccion' + muestra)
    }, 2000)

}

function ocultaNube(selector) {
    $(selector).fadeOut();
}

function cierre() {
    pausa = true;
    if (ganapremio == 0) {
        $('.home').fadeOut();
        $('.ganacamiseta, .ganagorra, .ganaentrada,.ganacuaderno, #instrucciones').hide();
        $('.pierde').removeClass("hidden").fadeIn();
    } else {
        $('.home').fadeOut();
        $('.pierde').hide();
        $('.ganacamiseta').hide();
        $('.ganagorra').hide();
        $('.ganaentrada').hide();
        $('.ganacuaderno').hide();
        if (premioganado == 2) {
            $('.ganacamiseta').removeClass("hidden").fadeIn();
        }
        if (premioganado == 3) {
            $('.ganagorra').removeClass("hidden").fadeIn();
        }
        if (premioganado == 4) {
            $('.ganaentrada').removeClass("hidden").fadeIn();
        }
        if (premioganado == 5) {
            $('.ganacuaderno').removeClass("hidden").fadeIn();
        }
        //graba participacion
        $.post(accion + controladorApp + "/grabaEvento", {
            codigo: $('#box-codigo1').val(),
            cedula: $('#cedula').val(),
            idvalidador: idvalidador,
            premioganado: premioganado
        })
            .done(function (data) {
                if (data == 'F') {
                    // mostrarCodigoErrado()
                } else {
                    //primeravez = 0;
                    // mostrarCodigoCorrecto(data)
                }
            });
    }

}

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
            event.preventDefault();
            //si campos registro no estan visibles y estan llenos por recarga pagina los mostramos
            if (seguirFormulario == 1) {
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
                            $.post(accion + controladorApp + "/validarCodigo", {
                                codigo: $('#box-codigo1').val(),
                                cedula: $('#cedula').val(),
                                nombre: $('#nombre').val(),
                                apellido: $('#apellido').val(),
                                mail: $('#mail').val(),
                                telefono: $('#telefono').val(),
                                ciudad: $('#ciudad').val()
                            })
                                .done(function (data) {
                                    if (data == 'F') {
                                        mostrarCodigoErrado()
                                    } else {
                                        mostrarCodigoCorrecto(data)
                                    }
                                });
                        }
                    }
                );
            }
            else {
                $('#complete_register').removeClass("hidden").show();
                $('.portabotones').removeClass("hidden").show();
            }

            return false;
        }
    )
    ;


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
    if (($('#nombre').val() == '') || ($('#apellido').val() == '') || ($('#ciudad').val() == '') || ($('#mail').val() == '') || ($('#telefono').val() == '')) {
        $('#nombre').val("");
        $('#apellido').val("");
        $('#mail').val("");
        $('#telefono').val("");
        $('#ciudad').val("");
    }
}

function mostrarFormCompleto(data) {
    $('#complete_register').removeClass("hidden").show();
    $('.portabotones').removeClass("hidden").show();
    var data = JSON.parse(data);
    if (($('#nombre').val() == '') || ($('#apellido').val() == '') || ($('#ciudad').val() == '') || ($('#mail').val() == '') || ($('#telefono').val() == '')) {
        $('#nombre').val(data['nombre']);
        $('#apellido').val(data['apellido']);
        $('#mail').val(data['mail']);
        $('#telefono').val(data['telefono']);
        $('#ciudad').val(data['ciudad']);
    }
}


function mostrarCodigoErrado() {
//    $('#mensaje-envio').html("Código Incorrecto");
    $('#example').popover('show');
    setTimeout(function () {
        $('#example').popover('hide');
    }, 4000);
}
function mostrarCodigoCorrecto(data) {
    obj = JSON.parse(data);
    if (obj.id_premio == 1) {
        ganapremio = 0;
    } else {
        ganapremio = 1;
    }

    idvalidador = obj.id;

    //segunda parte de cancion
    backgroundAudio.src = "linus-and-lucy_part_1.mp3"
    premioganado = obj.id_premio;
    ocultarTodosSeccion();
    $('#home').removeClass("hidden").show();

    var anim = "crossscreen";
    if (primeravez == 1) {
        animGelatinas(anim, "#animationGelatina1");
        $('#instrucciones').removeClass("hidden").show();
    }
    setTimeout(function () {
        $('.flecha_animada').fadeOut()
    }, 5000)
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
