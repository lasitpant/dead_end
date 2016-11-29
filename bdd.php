<?php
try
{
	$bdd = new PDO('mysql:host=tcp:newcalendar.database.windows.net;dbname=newDb;charset=utf8', 'rituraj', 'lasit@1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
