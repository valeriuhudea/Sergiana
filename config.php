<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "test"; // o vom folosi mai tarziu
$dsn        = "mysql:host=$host;dbname=$dbname"; //  o vom folosi mai tarziu
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );