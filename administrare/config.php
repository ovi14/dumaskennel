<?php
	session_start();
	
    require_once("config_db.php");

	if(isset($_GET['page']) && ($_GET['page'] == 'logout'))
	{
		session_destroy();	
		header('Location: index.php');
	}
	
	require_once('connect_db.php');
	require_once(dirname(__FILE__).'/php/functions.php');	

	$time_zone = "Europe/Bucharest";
	date_default_timezone_set($time_zone);
	
	require_once('const_config.php');
	
?>
