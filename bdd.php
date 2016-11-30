<?php

function connection()
{	
        $host = "eu-cdbr-azure-west-a.cloudapp.net";
	$user = "b1929b8315b135";
	$pwd = "c752bb86";
	$db = "newcalendardb";

try
{
	
	$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
return $conn;	
}

function createtable()
{
	$sql = "CREATE TABLE items(
			id INT NOT NULL AUTO_INCREMENT, 
			PRIMARY KEY(id),
			name VARCHAR(30),
			category VARCHAR(30),
			date DATE,
			is_complete  BOOL)";

        return $sql;
}



?>
