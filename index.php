<?php
#---------------------------------------# 
#               Whatcore                #
#---------------------------------------#
#       ¡Content Management System!     #
#---------------------------------------#

// Inicializacion de el Sistema
require_once('/Whatcore/Start().php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $Header_name ?></title>

<link rel="shortcut icon" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/995/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo: RSS" href="http://www.habbo.es/articles/rss.xml" />


<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/995/web-gallery/static/styles/frontpage.css" type="text/css" />
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/995/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/995/web-gallery/static/js/landing.js" type="text/javascript"></script>


<link rel="stylesheet" href="<?php echo $Site_patch ?>/Resources/Style/Spain.css" type="text/css" />

<script src="/js/local/es.js" type="text/javascript"></script>
<meta property="fb:app_id" content="157382664122" />

<meta property="og:site_name" content="<?php echo $Site_name ?>" />
<meta property="og:title" content="<?php echo $Header_name ?>" />
<meta property="og:url" content="<?php echo $Site_patch ?>" />
<meta property="og:image" content="http://www.habbo.es/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="es_ES" />

<style type="text/css">
        body {
             background-color: #000000;
            
        }
        #footer .footer-links   { color: #808080; }
        #footer .footer-links a { color: #ffffff; }
        #footer .copyright      { color: #666666; }
        #footer #compact-tags-container span, #footer #compact-tags-container a { color: #333333; }
    </style>

<meta name="description" content="Habbo Hotel: haz amig@s, únete a la diversión y date a conocer." />
<meta name="keywords" content="habbo hotel, mundo, virtual, red social, gratis, comunidad, personaje, chat, online, adolescente, roleplaying, unirse, social, grupos, forums, seguro, jugar, juegos, amigos, adolescentes, raros, furni raros, coleccionable, crear, coleccionar, conectar, furni, muebles, mascotas, diseño de salas, compartir, expresión, placas, pasar el rato, música, celebridad, visitas de famosos, celebridades, juegos en línea, juegos multijugador, multijugador masivo" />
<meta name="build" content="<?php echo $Content['build'] ?>" />
</head>


<body id="frontpage">

<div id="overlay"></div>


<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">¿Contraseña olvidada?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="https://www.habbo.es/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/?changePwd=true" />
                <span>Por favor, introduce el email de tu Habbo cuenta:</span>
                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Por favor, introduce un e-mail</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Cancelar</a>
                <a href="#" id="change-password-submit-button" class="new-button"><b>Enviar email</b><i></i></a>
            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Te hemos enviado un email a tu dirección de correo electrónico con el link que necesitas clicar para cambiar tu contraseña.<br>
<br>

¡NOTA!: Recuerda comprobar también la carpeta de 'Spam'</span>
                <div id="email-sent-container"></div>
            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link">Atrás</a>
                <a href="#" id="change-password-success-button" class="new-button"><b>Cerrar</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom"></div>
</div>

<script type="text/javascript">
HabboView.add( function() {
     ChangePassword.init();


});
</script>

<div id="site-header">


    <form id="loginformitem" name="loginformitem" action="<?php echo $Site_patch ?>/Actions/submit.php" method="post">

    



        <div style="clear: both;"></div>

        <div id="site-header-content">

            <div id="habbo-logo"></div>

            <div id="login-form">


                <div id="login-form-email">
                    <label for="login-username"
                           class="login-text">Email</label>
                    <input tabindex="3" type="text" class="login-field" name="credentials.username" id="login-username"
                           value="" maxlength="48"/>
                    <input tabindex="6" type="checkbox" name="_login_remember_me" id="login-remember-me"
                           value="true"/>
                    <label for="login-remember-me">Mantener conectado</label>

<div id="landing-remember-me-notification" class="bottom-bubble" style="display:none;">
    <div class="bottom-bubble-t"><div></div></div>
    <div class="bottom-bubble-c">
                Seleccionando esta opción permanecerás conectado a Habbo hasta que des a la opción 'Desconectar'
    </div>
    <div class="bottom-bubble-b"><div></div></div>
</div>

                </div>

                <div id="login-form-password">
                    <label for="login-password" class="login-text">Contraseña</label>
                    <input tabindex="4" type="password" class="login-field" name="credentials.password"
                           id="login-password" maxlength="32"/>

                    <div id="login-forgot-password">
                        <a href="#" id="forgot-password"><span>¿Contraseña olvidada?</span></a>
                    </div>
                </div>

                <div id="login-form-submit">
                    <input type="submit" value="Conectar" class="login-top-button"
                           id="login-submit-button"/>
                    <a href="#" tabindex="5"
                       id="login-submit-new-button"><span>Conectar</span></a>
                </div>

            </div>

            <div id="rpx-login">
                <div>
<div id="fb-root"></div>
<a class="fb_button fb_button_large" onclick="FBLogin(); return false;">
    <span class="fb_button_text">Conectar vía Facebook</span>
</a>
                </div>

                <div>

<div id="rpx-signin">
    <a class="rpxnow" href="<?php echo $Site_patch ?>/Social.php">Mas vias de conexiones</a>
</div>                </div>

            </div>

<noscript>
<div id="alert-javascript-container">
    <div id="alert-javascript-title">
        Sin soporte JavaScript
    </div>
    <div id="alert-javascript-text">
        Javascript está deshabilitado en tu navegador. Por favor, permite que haya JavaScript o actualiza tu navegador a una versión con Javascript para poder usar Habbo :)
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
        &quot;Cookies&quot; deshabilitadas
    </div>
    <div id="alert-cookies-text">
        Tu navegador está configurado para no aceptar "cookies". Por favor, habilita el uso de "cookies" para utilizar Habbo.
    </div>
</div>
<script type="text/javascript">
    document.cookie = "habbotestcookie=supported";
    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;
    if (cookiesEnabled) {
        var date = new Date();
        date.setTime(date.getTime()-24*60*60*1000);
        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();
    } else {
        $('alert-cookies-container').show();
    }
</script>

            <script type="text/javascript">
                HabboView.add(function() {
                    LandingPage.init();
                    if (!LandingPage.focusForced) {
                        LandingPage.fieldFocus('login-username');
                    }
                });
            </script>

        </div>

    </form>

</div>

<div id="fp-container">
    <div id="content">
    <div id="column1" class="column">
                        
                <div class="habblet-container ">        
    
                        <div style="width: 890px; margin: 0 auto">
        <div id="tagline">Haz amig@s, súmate a la diversión y date a conocer</div>
</div>

<div id="frontpage-image-container">


    <div id="join-now-button-container">
        <div id="join-now-button-wrapper-fb">
            <div class="join-now-alternative">&nbsp;</div>
            <div class="join-now-button">
                <a class="join-now-link" href="#" onclick="assistedLogin(FB); return false;"> 
                    <span class="join-now-text-big">Usa Habbo</span>
                    <span class="join-now-text-small">con<span class="fbword">Facebook</span></span>
                </a>
                <span class="close"></span>
            </div>
            <div class="join-now-alternative">
                <a id="register-link-fb" href="/quickregister/start" onclick="startRegistration(this); return false;">
                o crea una Habbo cuenta
                </a>
            </div>
        </div>
        <div id="join-now-button-wrapper">
            <div class="join-now-alternative">
                <a href="/quickregister/start" class="newusers" onclick="startRegistration(this); return false;"><b>Nuevo usuario</b>,<span style="color: #8f8f8f;">haz clic aquí y</span></a>
            </div>
            <div class="join-now-button">
                <a class="join-now-link" id="register-link" href="/quickregister/start" onclick="startRegistration(this); return false;"> 
                    <span class="join-now-text-big">Únete ahora</span>
                    <span class="join-now-text-small">es Gratis</span>
                </a>
                <span class="close"></span>
            </div>
            <div class="join-now-alternative">
                <a class="fbicon" href="#" onclick="FBLogin(); return false;">
                Usa Habbo con Facebook
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function startRegistration(elem) {
            targetUrl = elem.href;
            if (typeof targetUrl == "undefined") {
                targetUrl = "/quickregister/start";
            }
            window.location.href = targetUrl;
        }
    </script>

    <div id="people-inside">
        <b><span><span class="stats-fig">14582</span> personas dentro</span></b>
        <i></i>
    </div>

    <a href="/quickregister/start" id="frontpage-image" style="background-image: url('<?php echo $Site_patch ?>/Resources/Web-Gallery/frontpage/FFindex.png')" onclick="startRegistration(this); return false;"></a>

</div>


<script type="text/javascript">
    document.observe("dom:loaded", function() {
        LandingPage.checkLoginButtonSetTimer();
    });
</script>

                        
                            
                    
                </div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
             

</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<div id="footer" class="new_and_improved">
    <p class="footer-links"><a href="https://help.habbo.es/">Contáctanos</a> | <a href="http://www.habbo.es/groups/GuiaparaPadres">Guía para Padres</a> | <a href="https://help.habbo.es/entries/368102-terminos-y-condiciones-del-servicio" target="_new">Términos y Condiciones</a> | <a href="https://help.habbo.es/entries/367962-licencia-y-software-habbo" target="_new">Copyright</a> | <a href="/groups/_LaManeraHabbo" target="_new">La Manera Habbo</a> | <a href="http://www.habbo.es/groups/ConsejosdeSeguridad">Seguridad</a> | <a href="mailto:advertising.es@sulake.com" target="_new">Publicidad</a></p>
    <div id="age-recommendation"></div>
    <div id="sulake-logo"><a href="http://www.sulake.com"></a></div>
    <p class="copyright"><?=$FooterC?> </p>

        <div id="compact-tags-container">
          
        </div>

</div>
    </div>
</div>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '<?php echo $Facebook_id ?>',
            status     : true, 
            cookie     : true,
            xfbml      : true,
            oauth      : true,
          });
        };
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/es_LA/all.js";
           d.getElementsByTagName('head')[0].appendChild(js);
         }(document));

        function FBLogin()
        {
            FB.login(function(e)
            {
           

            if(e.status !== 'unknown')
                document.location.replace("Actions/Connect.php");
            },{scope: 'user_about_me, user_birthday, user_status, user_location, email'});
        }
      </script>            

</body>
</html>

