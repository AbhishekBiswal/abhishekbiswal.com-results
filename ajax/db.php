<?php

		$host = getenv('MYSQL_DB_HOST');
		$dbname = getenv('MYSQL_DB_NAME');
		$seruser = getenv('MYSQL_USERNAME');
		$pass = getenv('MYSQL_PASSWORD');

	try 
	{  
		# MySQL with PDO_MYSQL 
		global $DBH;
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $seruser, $pass);  
	}  
	catch(PDOException $e)
	{  
		    echo $e->getMessage();  
	}  

?>