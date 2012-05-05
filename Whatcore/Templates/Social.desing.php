<!DOCTYPE html>
<html lang="es">
<head>
	<title>Conexion Social - Whatcore</title>
	<link href="http://localhost/Resources/Style/SocialAPI.css" rel="stylesheet" />
	<link href="http://resources.infosmart.mx/system/css/style.css" rel="stylesheet" />
</head>
	<body>
		<div id="fb-root"></div>
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
        	console.log(e);

        	if(e.status !== 'unknown')
        		document.location.replace("../../../Actions/Connect.php");
        	},{scope: 'user_about_me, user_birthday, user_status, user_location, email'});
        }
      </script>
	<div class"page">
	<div class"wrapper">
		<header>
			<center><h1>Conexion Facebook LifeSmart</h1></center>
		</header>

<div class"content">
	<div class"c1">
	<p>		  LifeSmart Conexion te permite conectarte mediante tu Red social preferidad...<p>
	</div>
	
	<div class"c2">
    <a class="fb_button fb_button_large" onclick="FBLogin(); return false;">
    <span class="fb_button_text">Conectar vía Facebook</span>
	</a>
</div>
	</div>
   </div>
 
	</body>
	</html>
