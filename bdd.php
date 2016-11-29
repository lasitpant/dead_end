<?php
try
{
	
	$bdd = new PDO("sqlsrv:server = tcp:newcalendar.database.windows.net,1433; Database = newDb", "rituraj", "lasit@1234");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
