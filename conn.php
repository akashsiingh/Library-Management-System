<?php

	$mysqli = new mysqli('localhost:3309','root','','library1');
	if($mysqli->connect_error)
	{
		die('Connection Error('.$mysqli->connect_errno.')'.$mysqli->connection_error);
	}


?>