<?php
#---------------------------------------# 
#               Whatcore                #
#---------------------------------------#
#       ¡Content Management System!     #
#---------------------------------------#
// Definicion de el Sistema

require('./Whatcore/Start().php');

session_start();

if(!session_is_registered(username)){

	if(isset($_POST['username']) && isset($_POST['password'])){
	$username = FilterText($_POST['username']);
	$password = FilterText(HoloHash($_POST['password'], $username));
	$password2 = FilterText(HoloHashMD5($_POST['password'], $username));
		
		if(empty($username) || empty($password)){
			$login_error = "Por favor, introduce tu email y contrase&ntilde;a para conectarte.";
		} else {
			$sql = mysql_query("SELECT id FROM users WHERE username = '".$username."' AND password = '".$password."' OR username = '".$username."' AND password = '".$password2."' LIMIT 1") or die(mysql_error());
			if(mysql_num_rows($sql) < 1){
				$login_error = "Tu contrase&ntilde;a y <?php echo $shortname; ?> Nombre no coinciden.";
			} else {
				$userdata = mysql_fetch_assoc($sql);
				$userid = $userdata['id'];
				$ban = mysql_query("SELECT * FROM bans WHERE value = '".$username."' AND bantype = 'user' or value = '".$remote_ip."' AND bantype = 'ip' LIMIT 1") or die(mysql_error());
				if(mysql_num_rows($ban) < 1){

					mysql_query("UPDATE users SET password = '".$password2."', ip_last = '".$remote_ip."' WHERE username = '".$username."'");

					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password2;
						if($_POST['_login_remember_me'] == "true"){
							setcookie("remember", "remember", time()+60*60*24*100, "/");
							setcookie("rusername", $_SESSION['username'], time()+60*60*24*100, "/");
							setcookie("rpassword", $_SESSION['password'], time()+60*60*24*100, "/");
						}
					header("location: $path/me"); exit;
				} else {
					$bandata = mysql_fetch_assoc($ban);
					$timestamp = time();
					if($bandata['expire'] > $timestamp){
						$login_error = "&iexcl;Has sido baneado! La raz&oacute;n de su baneo ha sido \"" . $bandata['reason'] . "\" y durara hasta el " . date('d.m.Y - H:i:s', $bandata['expire']) . ".";
					} else {
						mysql_query("DELETE FROM bans WHERE value = '".$username."' AND bantype = 'user' OR value = '".$remote_ip."' AND bantype = 'ip' LIMIT 1") or die(mysql_error());
						mysql_query("UPDATE users SET password = '".$password2."', ip_last = '".$remote_ip."' WHERE username = '".$username."'");

					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password2;
							if($_POST['_login_remember_me'] == "true"){
								setcookie("remember", "remember", time()+60*60*24*100, "/");
								setcookie("rusername", $_SESSION['username'], time()+60*60*24*100, "/");
								setcookie("rpassword", $_SESSION['password'], time()+60*60*24*100, "/");
							}
						header("location: $path/me"); exit;
					}
				}
			}
		}
	}
	?>