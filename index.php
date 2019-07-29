<?php
session_start ();

require "vendor/autoload.php";
use NGADEYNE\Photography_Package\Engine\Router;

$router = new Router();
$router->routerRequest();

// Projet 5 de la formation DWJ d'Openclassrooms.
// Voir le README pour plus d'infos.
