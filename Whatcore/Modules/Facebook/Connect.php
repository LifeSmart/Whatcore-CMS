<?php
#---------------------------------------# 
#               Whatcore                #
#---------------------------------------#
#       ¡Content Management System!     #
#---------------------------------------#
require('facebook.php');
require('/../Whatcore/Start().php');

$fb = new Facebook(Array(
	'appId' => $Facebook_id,
	'secret' => $Facebook_secret
));

$User = $fb->getUser();
if($User)
{
	try
	{
		$profile = $fb->api("/me");
	}
	catch(FacebookApiException $e) 
	{ 
		echo $e;
		$User = null;
	}
}
else
{
		header("Location: " . $fb->getLoginUrl());
		
}
	
	

?>
