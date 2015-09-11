<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Royal :: Ruleta</title>
    <meta http-equiv="content-language" content="es"/>
    <meta name="robots" content="follow,index,nocache"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="SAMSUNG :: Karaoke"/>
    <meta name="author" content="Misiva Corp"/>

    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

    <link href="<?php echo base_url() ?>js/royal_ruleta/si/jquery.si.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url() ?>js/royal_ruleta/si/jquery.si.js" type="text/javascript"></script>


    <script type="text/javascript" src="<?php echo base_url() ?>js/royal_ruleta/jwplayer/jwplayer.js"></script>
    <script language="JavaScript" src="<?php echo base_url() ?>js/royal_ruleta/scriptcam/scriptcam.js"></script>
    <script type="text/javascript" src="<?php echo base_url('js/general/validate.js') ?>"></script>
    <script src="<?php echo base_url() ?>js/royal_ruleta/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/royal_ruleta/ligthbox/ekko-lightbox.min.js"></script>

    <script language="JavaScript" src="<?php echo base_url() ?>js/royal_ruleta/app.js"></script>

    <link href="<?php echo base_url() ?>fonts/Roboto-Bold/styles.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>css/royal_ruleta/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>js/royal_ruleta/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/royal_ruleta/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>css/royal_ruleta/animate.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

</head>

<body>

<div id="registro" class="hidden  seccion fondo-registro">
    <div class="container vertical-center">
        <div class="cien ">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke">
                        <!--<img src="<?php /*echo base_url() */ ?>imagenes/royal_ruleta/home/logo_karaoke.png"
                             class="img-responsive"/>-->
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="roboto-bold titulo text-center"><p>REGISTRO</p></div>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <form id="registroform"
                          action=""
                          method="post"
                          enctype="multipart/form-data">
                        <ul class="login_wid">
                            <li><input class="box-text" type="text" id="cedula" name="cedula" maxlength="10"
                                       required="required"
                                       placeholder="Cédula:"></li>

                            <div id="complete_register" class="hidden">
                                <li><input class="box-text" type="text" id="nombre" name="nombre" maxlength="20"
                                           required="required"
                                           placeholder="Nombre:">
                                </li>
                                <li><input class="box-text" type="text" id="apellido" name="apellido" maxlength="20"
                                           required="required"
                                           placeholder="Apellido:">
                                </li>
                                <li><input class="box-text" type="email" id="mail" name="mail" maxlength="100"
                                           required="required"
                                           placeholder="Email:">
                                </li>
                                <li><input class="box-text" type="text" id="telefono" name="telefono" maxlength="10"
                                           required="required"
                                           placeholder="Teléfono:"></li>
                                <li><input class="box-text" type="text" id="ciudad" name="ciudad" maxlength="20"
                                           required="required"
                                           placeholder="Ciudad:">
                                </li>
                            </div>
                            <li class="text-center">
                                <div class="portabotones center-block hidden    ">
                                    <input type="submit" value="Continuar" name="login" class="btn-ingreso botontexto"
                                           style="">
                                </div>

                            </li>
                            <li class="text-center">
                                <div id="mensaje-envio"></div>
                            </li>
                        </ul>
                        <input type="text" id="fbid" name="fbid" class="hidden">
                    </form>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>
            </div>
        </div>


    </div>

</div>

<div id="ingresocodigo" class="hidden seccion fondo-ingresocodigo">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <!--<img src="<?php /*echo base_url() */ ?>imagenes/royal_ruleta/web-cam/logo_karaoke.png"
                             class="img-responsive"/>-->
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <div class="  roboto-bold titulo text-center hidden-xs"><p>Ingresa el código de tu producto</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 center-block text-center">
                    <div id="ingresolote-container" class="center-block">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center margen-0 center-block">
                            <div
                                class="col-center-block col-md-7 col-sm-8 col-xs-12 ingresolote-container-pop">
                                <div class="col-md-12 col-sm-12 col-xs-12 margen-0 " style="margin-top: 12px">
                                    <input class="" type="text" id="box-codigo1" maxlength="60"
                                           name="box-codigo"
                                           placeholder="Escribe aqui el codigo de tu producto">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="portabotones center-block">
                                        <class id="btnvalidacodigo" class="botontexto hidden-xs ">Continuar</class>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="portabotones center-block textoIngresoLote hidden">
                                        <class class="text-center">Ingrese el número de lote</class>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="mensaje-error" class="center-block hidden">
                        <div class="col-center-block col-md-7 col-sm-8 col-xs-12 ingresolote-container-pop">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="messageerror" class="roboto-light text-center texto-interno">Número de lote
                                    inválido
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="portabotones center-block">
                                    <class id="btnRegresarIntento" class="botontexto hidden-xs ">Volver a intentarlo
                                    </class>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contenedorGelatina">


</div>

<div id="home" class=" seccion fondo-home ">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="logo-karaoke">
                    <!--<img src="<?php /*echo base_url() */ ?>imagenes/royal_ruleta/home/logo_karaoke.png"
                         class="img-responsive"/>-->
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <div class="portabotones center-block">
                        <class class="botontexto js--triggerAnimation1">Iniciar</class>
                    </div>
                    <div class="portabotones center-block">
                        <class class="botontexto js--triggerAnimation2">Detener</class>
                    </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="roboto-light texto-home text-center">
                    Pulsa sobre el boton para detener el envio
                </p>
            </div>
        </div>

    </div>
</div>

<div id="instrucciones" class="hidden seccion fondo-instrucciones">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12 vertical-centercol-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <img src="<?php echo base_url() ?>imagenes/royal_ruleta/intrucciones/logo_karaoke.png"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="roboto-bold titulo text-center"><p>INSTRUCCIONES</p></div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class=" conten-instrucciones">
                        <div class="text-center texto20">
                            <p><span class="roboto-bold">1.- </span><span
                                    class="roboto-light">Regístrate con tus datos completos</span></p>
                        </div>
                        <div class="text-center texto20">
                            <p><span class="roboto-bold">2.- </span><span class="roboto-light">Selecciona una de tus canciones
                            favoritas de la mejor década, 1990, graba y sube tu video de máximo 15 segundos
                            directo a tu galería. Tu canción formará parte de nuestra playlist.</span></p>
                        </div>
                        <div class="text-center texto20">

                            <p><span class="roboto-bold">3.- </span><span class="roboto-light">Comparte tus videos con
                            tus amigos usando el HT </span><span class="roboto-bold">#KaraokeGalaxyA.</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10  ">
                    <div class="col-md-4 col-sm-4 col-xs-12  margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-home ">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/royal_ruleta/intrucciones/boton_home.png"
                                        class="img-responsive "/>
                                </div>
                            </div>
                            <div class="col-xs-1 margen-0"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-subir-video">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/royal_ruleta/intrucciones/boton_subirvideo.png"
                                        class="img-responsive"/>
                                </div>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-galeria">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/royal_ruleta/intrucciones/boton_galeria.png"
                                        class="img-responsive"/>
                                </div>
                            </div>
                            <div class="col-xs-1 margen-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="galeria" class="hidden seccion fondo-galeria">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <img src="<?php echo base_url() ?>imagenes/royal_ruleta/galeria/logo_karaoke.png"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="roboto-bold titulo text-left"><p>GALERÍA</p></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <div class="fondo-video pull-right">
                        <div class="col-md-10 col-sm-10 col-xs-10 margen-0 ">
                            <div class="pull-left div-buscar-video"><input class="" type="text" id="box-buscar-video"
                                                                           name="box-buscar-video"
                                                                           placeholder="Buscar video"></div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 margen-0">
                            <div class="pull-right boton-buscar-video"><p><img
                                        src="<?php echo base_url() ?>imagenes/royal_ruleta/galeria/icono_buscar.png">
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 margen-0">

                    <div id="galeria-imagenes" class="col-md-12 col-sm-12 col-xs-12"></div>

                </div>


            </div>

            <!--Botones-->
            <div class="col-md-12 col-sm-12 col-xs-12  ">
                <div class="col-md-6 col-sm-6 col-xs-6   ">
                    <div class="btn-home-home botontexto col-center-block   pull-right">
                        <div class="icono-instrucciones">Inicio</div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-xs-6   ">

                    <div class="btn-home-subir-video botontexto col-center-block pull-left ">
                        <div class="icono-subir-video">Subir video</div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<div id="comunes" class="hidden-xs">
    <div class="col-md-4 col-sm-4 col-xs-5">
        <div class="logo-samsung-galaxya ">
            <!--            <img
                src="<?php /*echo base_url() */ ?>imagenes/royal_ruleta/home/logo_galaxya.png"
                class="img-responsive">-->
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-2">
    </div>
    <div class="col-md-4 col-sm-4 col-xs-5">
        <div class="logo-samsung pull-right ">
            <!--<img
                src="<?php /*echo base_url() */ ?>imagenes/royal_ruleta/home/logo_samsung.png"
                class="img-responsive">-->
        </div>
    </div>

    <div id="" class="roboto-light terminos-condiciones"><a
            href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf" target="_blank">Términos y
            condiciones</a></div>
</div>

<script type="text/javascript" charset="utf-8">
    var idParticipante = 0;
    var nombreParticipante = "";
    var accion = "<?php echo base_url()?>";
    var controladorApp = "<?php echo $data['controlador'];?>";


    var rules = [
        {name: 'nombre', display: 'nombre', rules: 'required'},
        {name: 'apellido', display: 'apellido', rules: 'required'},
        {name: 'ciudad', display: 'ciudad', rules: 'required'},
        {name: 'cedula', display: 'cedula', rules: 'required|numeric||max_length[10]'},
        {name: 'telefono', display: 'telefono', rules: 'required|numeric|max_length[10]'},
        {name: 'mail', display: 'mail', rules: 'required|valid_email'}
    ];

    var validator = new FormValidator('register', rules, function (errors, event) {
        if (errors.length > 0) {
            var errorString = '';
            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                $('#' + errors[i].id).val("");
                $('#' + errors[i].id).css({"color": "#42332a"});
                errorString += errors[i].id + "<br>";
            }
            ;
            alert("REGISTROS NO COMPLETADOS");
        } else {
            $(".btn-continuar-registro").hide();
            $("#submit").hide();
            enviarForma('register');
        }
    });

    var dis = "<?php  echo $data['dispositivo'];?>";
</script>

<script>
    //Google Analitics
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-2423727-40', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>