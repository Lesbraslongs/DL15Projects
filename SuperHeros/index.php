<?php
/*use Model\HerosDAO;
use Model\HerosDTO;
//use Controller\HerosController;
use View\heros;*/
require_once ("src/Controller/HerosController.php");

$router = new HerosController();
$router->routeur();
?>