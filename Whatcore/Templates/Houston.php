<?php require('/../Start().php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo $title_errors ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<meta charset="iso-8859-15" />	
	<meta name="robots" content="noodp, nofollow" />

	<link href="//resources.infosmart.mx/system/css/style.css" rel="stylesheet" />
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	
	<style>
	.cwrapper
	{
		margin: 4% auto;
		width: 600px;
	}	

	header 
	{		
		background: #ffffff;
		background: -moz-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f7f7f7));
		background: -webkit-linear-gradient(top, #ffffff 0%,#f7f7f7 100%);
		background: -o-linear-gradient(top, #ffffff 0%,#f7f7f7 100%);
		background: -ms-linear-gradient(top, #ffffff 0%,#f7f7f7 100%);
		background: linear-gradient(top, #ffffff 0%,#f7f7f7 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f7f7f7',GradientType=0 );

		border-bottom: 2px solid #444444;
		padding-bottom: 10px;
	}
	
	header h1 
	{
		color: black;
		float: left;
		font-family: "Segoe UI Light", Open Sans, Ubuntu, Segoe UI, Arial;
		font-size: 40px;
		font-weight: normal;
		line-height: 45px;
	}

	.fast-error aside
	{
		float: left;
		width: 400px;
	}

	.fast-error h3
	{
		font-size: 20px;
		font-weight: normal;
	}

	.fast-error figure
	{
		float: right;
	}

	.details
	{
		display: none;
		font-family: "Segoe UI", Ubuntu, Arial;
	}

	.details .c1
	{
		float: left;
		width: 280px;
	}

	.details .c2
	{
		float: right;
		width: 290px;
	}

	.details h5
	{
		font-family: "Open Sans", Segoe UI Light, Ubuntu, Arial;
		font-size: 19px;
		font-weight: normal;
		margin-bottom: 25px;
	}

	.details b
	{
		display: block;
		font-family: "Droid Sans", Ubuntu, Segoe UI, Arial;
		margin-top: 15px;
	}

	.details b:first-child
	{
		margin-top: 0;
	}

	footer 
	{
		border-top: 2px solid #444444;
		color: gray;
		font-size: 12px;
		padding: 15px 0;
	}
	</style>

	<script>
	function ShowDetails()
	{
		$('.fast-error').hide();
		$('.details').fadeIn('slow');
	}
	</script>
</head>
<body>
	<div class="page">
		<header>
			<div class="wrapper">
				<h1>Houston, tenemos un problema...</h1>
			</div>
		</header>

		<div class="cwrapper">
			<section class="fast-error">
				<aside>
					<h3>Creo que has roto algo...</h3>

					<p>
						Al parecer se ha encontrado un problema que nuestros chimpancés superdesarrollados no han podido solucionar o descubrir.
					</p>

					<p>
						No te preocupes, les hemos reportado del problema y esperaremos a que todo vuelva a la normalidad en poco tiempo.
					</p>

					
					<p class="center">
						<a onclick="history.back()">Volver al pasado</a> - <a onclick="document.location.reload()">Intentarlo nuevamente</a> - <a href="PATH">Ir al inicio</a>
					</p>

									</aside>

				<figure>
					
				</figure>
			</section>

					</div>

		<footer>
			<div class="wrapper">
				<label class="left">
					<a href="http://www.infosmart.mx/" target="_blank">Whatcore</a>. Todos los derechos reservados.
				</label>
				
				<label class="right">
				<p>¿Cres Que es un error?</p>
				</label>
			</div>
		</footer>
	</div>
</body>
</html>