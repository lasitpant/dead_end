<?php

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
