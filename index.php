<?php
session_start ();

require 'src/Engine/Router.php';

$router = new Router();
$router->routerRequest();

// Projet 5 de la formation DWJ d'Openclassrooms.
// Voir le README pour plus d'infos.
