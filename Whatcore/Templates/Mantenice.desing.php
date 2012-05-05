<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Lo sentimos <?php echo $Site_name ?> esta en mantenimiento</title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://error.habbo.com/es/js/jquery.tweet.js"></script>
	<link href="<?php echo $Site_patch ?>/Resources/Style/maintenance.css" rel="stylesheet" type="text/css" />
	
        
	
</head>
<body>
<div id="container">
</div>
	<div id="content">
<div id="container">
	<div id="content">
		<div id="header" class="clearfix">
			<center><h1><span></span></h1></center>
		</div>
		<div id="process-content">

<div class="fireman">

<h1>¡Paro por mantenimiento!</h1>

<p>
Lo sentimos, pero no es posible acceder a <?php echo $Site_name ?> por el momento.<br><br>
Volveremos pronto.
<p>

</div>

<div class="tweet-container">

<h2>¿Qué está pasando?</h2>

<div class="tweet"></div>

</div>

<div id="footer">
<div class="followbtn" style="text-align:right">
<a href="https://twitter.com/ESHabbo" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @ESHabbo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<p class="copyright">© 2008 - 2010 Sulake Corporation Oy. HABBO es una marca registrada de Sulake Corporation Oy en la Unión Europea, Estados Unidos, Japón, la República Popular China y otras jurisdicciones. Todos los derechos reservados.</p>
</div>

		</div>
	</div>
</div>

<script src="https://ssl.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-448325-19";
urchinTracker('/errorweb-es-apache');
</script>


<script type='text/javascript'>
$(document).ready(function(){
  $(".tweet").tweet({
    username: "ESHabbo",
    count: 10
  });
});
</script>

</body>
</html>
