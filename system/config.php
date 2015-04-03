<?php
	# This is the config file for the Cord3 'system'
	# You will be able to edit just about ANY setting in Cord3
	
	# General App Settings
	$appName = "Cord3";
	$appTitle = "Manage Anything. Manage Everything.";
	$appEnabled = True;
	
	# Database Settings
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'G*********!');
	define('DB_NAME', 'cord3_primary');
	
	# Connect to the database
	try {
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die ('<META HTTP-EQUIV="Refresh" CONTENT="0;URL=./system/error.php">');
		$db = mysql_select_db(DB_NAME, $link);
	} catch (Exception $e) {
		$ad = "dd";
	}
?>
