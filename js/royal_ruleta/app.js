//funciones scriptcam
$(document).ready(function () {
    iniciaFormulario()
    //llamada para mostrar webcam en div, incluye botones
    crearBotonesInterface();
});


/// fin actividad gelatinas
function animGelatina(x, animationDiv) {
    $(animationDiv).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {

        if (ultimo) {
            console.log($(this).attr('id'))
            $(this).removeClass().addClass('present');
        } else {
            $(this).removeClass().addClass('inicial');
        }
    });
};

// efectos
// lightSpeedIn
// lightSpeedOut
// lightSpeed

// variable de intervalo de lanzar gelatinas
var lanzaGelatina;
var ultimo = false;

var numeroGelatina = 1;
var ultimoidgelatina;

$(document).ready(function () {
    $('.js--triggerAnimation1').click(function (e) {
        ultimo = false;
        $('#animationSandbox').removeClass();
        e.preventDefault();
        var anim = "crossscreen";
        lanzaGelatinas(anim, "#animationGelatina1");
        lanzaGelatina = setInterval(lanzaGelatinas, 300);
    });

    $('.js--triggerAnimation2').click(function (e) {
        setTimeout(disparaDetener, 1000)
    });

});

function disparaDetener() {
    console.log("envio a detener");
    ultimo = true;
    window.clearInterval(lanzaGelatina)
}

function lanzaGelatinas() {
        var gelatinas = ["snoopy-juego\/cereza.png", "snoopy-juego\/frambuesa.png", "snoopy-juego\/limon.png", "snoopy-juego\/naranja.png", "snoopy-juego\/uva.png"];
    var divSeleccion = getRandomInt(0, 4);
    var nuevaGelatina = '<span id="animationGelatina' + numeroGelatina + '"><img ' +
        'src="imagenes\/royal_ruleta\/' + gelatinas[divSeleccion] + '"' +
        'class="img-responsive"/></span>';
    $(".contenedorGelatina").append(nuevaGelatina);

    if (!ultimo) {

        var anim = "crossscreen";
        animGelatina(anim, "#animationGelatina" + numeroGelatina);
    } else {

        var anim = "crossscreen";
        ultimoidgelatina = "animationGelatina" + numeroGelatina
        animGelatina(anim, "#animationGelatina" + numeroGelatina);
    }

    numeroGelatina = numeroGelatina + 1;
}
/// fin actividad gelatinas
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
                            // validamos el codigo del producto

                            console.log("validamos el producto")
            //              ocultarTodosSeccion();
            //              $("#ingresocodigo").removeClass("hidden").show();

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
    ocultarTodosSeccion();
    $('#home').removeClass("hidden").show();
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

