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
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

    <link href="<?php echo base_url() ?>js/royal_ruleta/si/jquery.si.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url() ?>js/royal_ruleta/si/jquery.si.js" type="text/javascript"></script>


    <script type="text/javascript" src="<?php echo base_url('js/general/validate.js') ?>"></script>
    <script src="<?php echo base_url() ?>js/royal_ruleta/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/royal_ruleta/ligthbox/ekko-lightbox.min.js"></script>



    <script language="JavaScript" src="<?php echo base_url() ?>js/royal_ruleta/app.js"></script>

    <meta property="og:title" content="Gana con Royal">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://www.ganaconroyal.com">
    <meta property="og:image" content="http://norfipc.com/img/logos/compartir-pagina-redes-sociales.jpeg">
    <meta property="og:site_name" content="GanaConRoyal">
<meta property="fb:admins" content="100001543332907">
    <meta property="og:description" content="Gana con Royal premios.">


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

    <div class="fondo-registro2  ">
        <div class="cabecerahome">
            <div class="container center-block">
                <img src="imagenes/royal_ruleta/snoopy-registro/background-a.png" class="img-responsive center-img">
            </div>
            <div class="container center-block">
                <div class="col-md-12 col-sm-12">
                    <div class="  col-md-offset-2    col-xs-12 col-md-8 col-sm-12">
                        <div class="titulares-registro titulares text-center">
                            <p>Llena tus datos, ingresa el código del empaque de tu gelatina Royal y participa por
                                un
                                viaje a Fox Studios en Los Ángeles.</p>

                            <p>También puedes jugar y ganar premios instáneos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--        <div class="container center-block">-->
        <div class=" ">
            <div class="espacio74 ">
                <div class="col-md-12 col-sm-12">


                    <div class="col-sm-offset-4 col-md-offset-4 col-xs-offset-4  col-md-8 col-sm-8 col-xs-8">
                        <div class="titulares titulo text-center"><p>REGISTRO</p></div>
                    </div>
                    <div class="col-sm-offset-3 col-md-offset-3 col-xs-offset-3  col-md-8 col-sm-8 col-xs-8">
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
                                    <li><input class="box-text" type="text" id="apellido" name="apellido"
                                               maxlength="20"
                                               required="required"
                                               placeholder="Apellido:">
                                    </li>
                                    <li><input class="box-text" type="email" id="mail" name="mail" maxlength="100"
                                               required="required"
                                               placeholder="Email:">
                                    </li>
                                    <li><input class="box-text" type="text" id="telefono" name="telefono"
                                               maxlength="10"
                                               required="required"
                                               placeholder="Teléfono:"></li>
                                    <li><input class="box-text" type="text" id="ciudad" name="ciudad" maxlength="20"
                                               required="required"
                                               placeholder="Ciudad:">
                                    </li>

                                    <li><input class="box-text" type="text" id="box-codigo1" name="box-codigo1"
                                               maxlength="20"
                                               required="required"
                                               placeholder="Código de tu producto:">
                                    </li>

                                    <li class="text-center">
                                        <div class="portabotones center-block ">
                                            <input type="submit" value="Continuar" name="login"
                                                   class="btn-ingreso botontexto"
                                                   style="">
                                        </div>
                                    </li>
                                    <li class="text-center">
                                        <div id="mensaje-envio"></div>
                                    </li>
                                    <li class="text-center">
                                        <a href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf"
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
            <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');">Compartir
                en Facebook</a>

            <div class="btn-instrucciones js--triggerInstrucciones"></div>
            <div class="btn-audioOn js--triggerAudio"></div>
            <div class="btn-compartir js--triggerCompartir"></div>
        </div>

        <div class="container center-block">
            <img src="imagenes/royal_ruleta/snoopy-registro/background-a.png" class="img-responsive center-img">
        </div>
        <div class="container vertical-center">

            <div class="flecha_animada js--triggerAnimation1"></div>
            <div class="boton-juego js--triggerAnimation1"></div>
            <div class="snoopy-juego"></div>
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
            <img src="imagenes/royal_ruleta/snoopy-juego/pierde.png" class="img-responsive">
        </div>
    </div>
    <div class="container vertical-center ganacamiseta  hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="imagenes/royal_ruleta/snoopy-juego/gana_camiseta.png" class="img-responsive">
        </div>
    </div>
    <div class="container vertical-center ganagorra  hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="imagenes/royal_ruleta/snoopy-juego/gana_gorra.png" class="img-responsive">
        </div>
    </div>
    <div class="container vertical-center ganaentrada  hidden">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="imagenes/royal_ruleta/snoopy-juego/gana_entrada.png" class="img-responsive">
        </div>
    </div>
</div>


<div id="movil" class="hidden-lg hidden-md hidden-sm">
    <div class="fondo-movil">
        <img src="imagenes/royal_ruleta/vista-mobile.jpg" width="100%">
    </div>
</div>


<div id="instrucciones" class="hidden seccion fondo-home hidden-xs">
    <div class="container vertical-center">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="imagenes/royal_ruleta/snoopy-juego/instrucciones.png" class="img-responsive">
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