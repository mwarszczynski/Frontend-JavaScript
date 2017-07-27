<?php

	$host = "name_host";
	$db_user = "user_name";
	$db_password = "password_";
	$db_name = "db_name";

	// Tworzernie polaczenia
	$conn = new mysqli($host,$db_user,$db_password, $db_name);
	if ($conn->connect_error){
	    die("Połączenie nieudane. Błąd.".$connect_error);
	}
?>
