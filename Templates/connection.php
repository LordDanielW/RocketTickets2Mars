<!--
	connection.php
	This page creates the connection with the database
-->
<?php

	//mysqli_select_db($db, $dbc);	

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'spacex_db';
	
	
	// Uncomment line below for XAMPP
     $dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    
	
	//Uncomment line below for MAMP
	//$dbc = mysqli_connect('localhost', 'web_user', 'webpassword', 'spacex_db');
	    
		

        
?>