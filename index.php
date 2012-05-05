<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=640" />

    <link rel="stylesheet" href="stylesheets/core.css" media="screen"/>
    <link rel="stylesheet" href="stylesheets/mobile.css" media="handheld, only screen and (max-device-width:640px)"/>
    <link rel="stylesheet" href="stylesheets/pygment_trac.css"/>

    <script type="text/javascript" src="javascripts/modernizr.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="javascripts/headsmart.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#main_content').headsmart()
      })
    </script>
    <title>Whatcore-CMS Proyect</title>
  </head>

  <body>
   <?php 
   $mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tiempoinicial = $mtime; 
?>
   <a id="forkme_banner" href="https://github.com/LifeSmart/Whatcore-CMS">¡Acceder a Github LifeSmart !</a>
    <div class="shell">

      <header>
        <span class="ribbon-outer">
          <span class="ribbon-inner">
            <h1>Whatcore-cms</h1>
            <h2>¡Content Management System! </h2>
          </span>
          <span class="left-tail"></span>
          <span class="right-tail"></span>
        </span>
      </header>

      <section id="downloads">
        <span class="inner">
          <a href="https://github.com/LifeSmart/Whatcore-CMS/zipball/master" class="zip"><em>Descargar</em> .ZIP</a><a href="https://github.com/LifeSmart/Whatcore-CMS/tarball/master" class="tgz"><em>Descargar</em> .TGZ</a>
        </span>
      </section>


      <span class="banner-fix"></span>


      <section id="main_content">
        <h1>---------------------------------------</h1>

<h1>Whatcore ¡Content Management System!</h1>

<h1>----------------------------------------------------</h1>

<p>Politicas de Privacidad:
LifeSmart Software Creea Sus productos de forma Gratuita proporcionandolo a el personal si nungun Costo alguno
Se encuentra protegido con la licencia de creative commons y Esta prohibido Realizar Copias Vendiendolas.</p>

<p>Powered By : LifeSmart 
            Copyright 2011 - 2012 Todos los derechos Reservados.</p>
      </section>

      <footer>
        <span class="ribbon-outer">
          <span class="ribbon-inner">
            <p>Powered by<a href="https://github.com/LifeSmart"> LifeSmart</a> en los servidores de <a href="https://github.com/LifeSmart/Whatcore-CMS"> GitHub</a></p>
          </span>
          <span class="left-tail"></span>
          <span class="right-tail"></span>
        </span>
        <p>Creado con <a href="http://pages.github.com">GitHub Pages</a> Todos los derechos Reservados.<br> <?php 
  $mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$tiempofinal = $mtime;
$tiempototal = ($tiempofinal - $tiempoinicial);
echo "La página fue creada en ".$tiempototal." segundos";  
?></p>
        <span class="octocat"></span>
      </footer>

    </div>


  </body>
</html>
