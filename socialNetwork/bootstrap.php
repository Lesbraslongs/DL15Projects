<?php
//bootstrap.php

require_once "vendor/autoload.php";
session_start();

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("src/Entity");
$isDevMode = true;

//configuration de la connexion

$dbParams = array(
			"driver" => "pdo_mysql",
			"user" => "root",
			"password" => "",
			"dbname" => "socialnetwork"
			);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);

if(isset($_SESSION['user'])) {
    $currentUser = $em->merge($_SESSION['user']);
}
?>