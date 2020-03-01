<?php

// Connexion a la base de données PC
$pdo = new PDO('mysql:host=localhost;dbname=shauto;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Connexion a la base de données MAC
// $pdo = new PDO('mysql:host=localhost;dbname=shauto', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));




// création et démarrage d'une session
session_start();

// Definition de constante que l'on va réutiliser tout le long du site
define("RACINE_SITE", $_SERVER["DOCUMENT_ROOT"] . "/php/atelier");
define("URL", "http://localhost/phpmysql/atelier");

$content = '';

//require_once('fonction.php');

?>