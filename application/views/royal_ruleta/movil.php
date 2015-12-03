<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Royal :: Ruleta</title>
    <meta http-equiv="content-language" content="es"/>
    <meta name="robots" content="follow,index,nocache"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Royal :: Ruleta de la Suerte"/>
    <meta name="author" content="Misiva Corp"/>

    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <link href="<?php echo base_url() ?>js/royal_ruleta/si/jquery.si.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url() ?>js/royal_ruleta/si/jquery.si.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>js/royal_ruleta/jquery.maskedinput.min.js" type="text/javascript"></script>


    <script type="text/javascript" src="<?php echo base_url('js/general/validate.js') ?>"></script>
    <script src="<?php echo base_url() ?>js/royal_ruleta/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/royal_ruleta/ligthbox/ekko-lightbox.min.js"></script>


    <script language="JavaScript" src="<?php echo base_url() ?>js/royal_ruleta/app.js"></script>

    <meta property="og:title" content="Gana con Royal">
    <meta property="og:type" content="article">
    <!--    <meta property="og:url" content="http://www.ganaconroyal.com">-->
    <meta property="og:url" content="http://www.ganaconroyal.com">
    <meta property="og:image" content="http://www.ganaconroyal.com/imagenes/royal_ruleta/facebook.jpg">
    <meta property="og:site_name" content="GanaConRoyal">
    <!--<meta property="fb:admins" content="100001543332907">-->
    <meta property="og:description"
          content="Yo ya estoy participando para ganar un viaje a Fox Studios en Los Ángeles  con Royal y por muchos premios más. Y tú… ¿qué esperas? Compra tu Gelatina Royal, ingresa el código de tu empaque y gana..">


    <link href="<?php echo base_url() ?>fonts/Roboto-Bold/styles.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>css/royal_ruleta/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>js/royal_ruleta/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/royal_ruleta/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>css/royal_ruleta/animate.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel="icon" type="image/png" sizes="96x96" href="imagenes/royal_ruleta/favicon/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/royal_ruleta/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="imagenes/royal_ruleta/favicon/favicon-16x16.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="imagenes/royal_ruleta/favicon/apple-touch-114x114.png"/>

</head>

<body>

<audio id="bgAudio" autoplay="autoplay" loop="loop"></audio>

<!--<div>
    <button onclick="document.getElementById('player').play()">Play</button>
    <button onclick="document.getElementById('player').pause()">Pause</button>
    <button onclick="document.getElementById('player').volume += 0.1">Vol+ </button>
    <button onclick="document.getElementById('player').volume -= 0.1">Vol- </button>
</div>-->


<div id="registro" class="  seccion fondo-registro hidden-xs">

    <div class="texto-info js--triggerInstruccionesInicio">
    </div>
    <div class="fondo-registro2">
        <div class="botones">
            <div class="btn-audioOn js--triggerAudio"></div>
            <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"
               target="_blank">
                <div class="btn-compartir js--triggerCompartir"></div>
            </a>
        </div>

        <div class="cabecerahome">
            <div class="container center-block">
                <img src="imagenes/royal_ruleta/snoopy-registro/background-a.png"
                     class="img-responsive center-img logoregistro">
            </div>
            <div class="container center-block">
                <div class="col-md-12 col-sm-12">
                    <div class="  col-md-offset-2    col-xs-12 col-md-8 col-sm-12">
                        <div class="titulares-registro titulares text-center">
                            <p>Llena tus datos, ingresa el código del empaque de tu gelatina Royal y participa por
                                un viaje a Fox Studios en Los Ángeles.</p>
                            <p>También puedes jugar y ganar premios instantáneos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="container center-block">-->
        <div class=" ">
            <div class="espacio74 hidden">
                <div class="col-md-12 col-sm-12">
                    <div class="col-sm-offset-3 col-md-offset-3 col-xs-offset-3  col-md-8 col-sm-8 col-xs-8">
                        <div class="titulares titulo text-center"><p>REGÍSTRATE</p></div>
                    </div>
                    <div class="col-sm-offset-3 col-md-offset-3 col-xs-offset-3  col-md-8 col-sm-8 col-xs-8">
                        <form id="registroform"
                              action=""
                              method="post"
                              enctype="multipart/form-data">
                            <ul class="login_wid">
                                <li class="li-form">
                                    <div class="col-md-3 col-sm-3 col-xs-3 margen-0 right tit-form">
                                        Cédula:
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 margen-0"><input class="box-text" type="text"
                                                                                            id="cedula" name="cedula"
                                                                                            maxlength="10"
                                                                                            required="required">
                                    </div>
                                </li>
                                <div id="complete_register" class="">
                                    <li class="li-form">
                                        <div class="col-md-3 col-sm-3 col-xs-3 margen-0 tit-form">
                                            Nombre:
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 margen-0">
                                            <input class="box-text" type="text" id="nombre" name="nombre" maxlength="20"
                                                   required="required">
                                        </div>
                                    </li>
                                    <li class="li-form">
                                        <div class="col-md-3 col-sm-3 col-xs-3 margen-0 tit-form">
                                            Apellido:
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 margen-0">
                                            <input class="box-text" type="text" id="apellido" name="apellido"
                                                   maxlength="20"
                                                   required="required">
                                        </div>
                                    </li>
                                    <li class="li-form">
                                        <div class="col-md-3 col-sm-3 col-xs-3 margen-0 tit-form">
                                            Email:
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 margen-0">
                                            <input class="box-text" type="email" id="mail" name="mail" maxlength="100"
                                                   required="required">
                                        </div>


                                    </li>
                                    <li class="li-form">
                                        <div class="col-md-3 col-sm-3 col-xs-3 margen-0 tit-form">
                                            Teléfono:
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 margen-0">
                                            <input class="box-text" type="text" id="telefono" name="telefono"
                                                   maxlength="10"
                                                   required="required">
                                        </div>
                                    </li>
                                    <li class="li-form">
                                        <div class="col-md-3 col-sm-3 col-xs-3 margen-0 tit-form">
                                            Ciudad:
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 margen-0">
                                            <input class="box-text" type="text" id="ciudad" name="ciudad" maxlength="20"
                                                   required="required">
                                        </div>
                                    </li>
                                    <li class="li-form">
                                        <div class="col-md-3 col-sm-3 col-xs-3 margen-0 tit-form">
                                            Lote:
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 margen-0">
                                            <input class="box-text" type="text" id="box-codigo1" name="box-codigo1"
                                                   maxlength="10"
                                                   required="required">
                                        </div>


                                    </li>
                                    <li class="text-center li-form">
                                        <div class="portabotones center-block ">
                                            <input type="submit" value="Continuar" name="login"
                                                   class="btn-ingreso botontexto"
                                                   style="">
                                        </div>


                                    </li>
                                    <li class="text-center li-form">
                                        <div id="mensaje-envio"></div>
                                    </li>
                                    <li class="text-center li-form terminos-condiciones">
                                        <a href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-ROYAL.pdf"
                                           target="_blank">Términos y
                                            condiciones</a>
                                    </li>
                                </div>
                            </ul>
                            <input type="text" id="fbid" name="fbid" class="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="home" class="hidden seccion fondo-home hidden-xs">

    <div class="fondo-home2 home ">
        <div class="pestaneo1"></div>
        <div class="pestaneo2"></div>
        <div class="pestaneo3"></div>
        <div class="botones">
            <div class="btn-instrucciones js--triggerInstrucciones"></div>
            <div class="btn-audioOn js--triggerAudio"></div>

            <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"
               target="_blank">
                <div class="btn-compartir js--triggerCompartir"></div>
            </a>
        </div>

        <div class="container center-block">
            <img src="imagenes/royal_ruleta/snoopy-registro/background-a.png"
                 class="img-responsive center-img logoregistro">
        </div>
        <div class="container vertical-center">

            <div class="flecha_animada js--triggerAnimation1 salto"></div>
            <div class="boton-juego js--triggerAnimation1"></div>
            <div class="snoopy-juego"></div>
            <div class="snoopy-juego-feliz hidden"></div>
            <!--            <div class="mensajeSeleccion1 mensaje hidden">
                            <div class="titulo">LINUS TIENE UNA GELATINA DE</div>
                        </div>
                        <div class="mensajeSeleccion2 mensaje hidden">
                            <div class="titulo">CHARLIE TIENE UNA GELATINA DE</div>
                        </div>
                        <div class="mensajeSeleccion3 mensaje hidden">
                            <div class="titulo">LUCY TIENE UNA GELATINA DE</div>
                        </div>
            -->
        </div>


        <div class="contenedorGelatina col-md-12 col-sm-12 col-xs-12">

        </div>
    </div>

    <div class="container vertical-center pierde hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="botones-juego">
                <div class="btn-pierde1"></div>
                <div class="btn-pierde2"></div>
                <div class="btn-pierde3"></div>
            </div>
            <img src="imagenes/royal_ruleta/snoopy-juego/pierde.png" class="img-responsive center-img">
        </div>
    </div>
    <div class="container vertical-center ganacamiseta  hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="botones-juego">
                <div class="btn-pierde1"></div>
                <div class="btn-pierde2"></div>
                <div class="btn-pierde3"></div>
            </div>
            <img src="imagenes/royal_ruleta/snoopy-juego/gana_camiseta.png" class="img-responsive center-img">
        </div>
    </div>
    <div class="container vertical-center ganagorra  hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="botones-juego">
                <div class="btn-pierde1"></div>
                <div class="btn-pierde2"></div>
                <div class="btn-pierde3"></div>
            </div>
            <img src="imagenes/royal_ruleta/snoopy-juego/gana_gorra.png" class="img-responsive center-img">
        </div>
    </div>

    <div class="container vertical-center ganaentrada  hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="botones-juego">
                <div class="btn-pierde1"></div>
                <div class="btn-pierde2"></div>
                <div class="btn-pierde3"></div>
            </div>
            <img src="imagenes/royal_ruleta/snoopy-juego/gana_entrada.png" class="img-responsive center-img">
        </div>
    </div>
</div>


<div id="movil" class="hidden-lg hidden-md hidden-sm">
    <div class="fondo-movil">
        <img src="imagenes/royal_ruleta/vista-mobile.jpg" width="100%">
    </div>
</div>

<div class="legales hidden-xs">
    <div class="center-img">
        <img src="imagenes/royal_ruleta/snoopy-juego/legales.png" class="img-responsive center-img">
    </div>
</div>
<div id="instrucciones" class="hidden seccion hidden-xs">
    <div class="container vertical-center">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="imagenes/royal_ruleta/snoopy-juego/instrucciones.png" class="img-responsive center-img">
        </div>
    </div>
</div>
<script type="text/javascript">
    var dir = window.document.URL;
    var dir2 = encodeURIComponent(dir);
    var tit = window.document.title;
    var tit2 = encodeURIComponent(tit);
</script>

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