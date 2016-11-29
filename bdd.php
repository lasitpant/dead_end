<?php
try
{
	
	$bdd = new PDO("sqlsrv:server = tcp:newcalendar.database.windows.net,1433; Database = newDb", "lasit", "Pant@1234");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
