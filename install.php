<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try 
{
	$connection = new PDO("mysql:host=$host", $username, $password, $options);
	$sql = file_get_contents("data/init.sql");
	$connection->exec($sql);
	
	echo "Baza de date si tabela fise a fost creata.";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}