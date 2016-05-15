<?php
	session_start();
	
	//check to make sure the session variable is registered
	if(isset($_SESSION['username']))
	{
		//session variable is registered, user ready to logout
		session_unset();
		session_destroy();
		echo 'U bent uitgelogd!';
		header("Location: index.php");
	}
	else
	{
		header( "Location: login.php" );
	}
?>