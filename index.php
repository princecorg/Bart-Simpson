<?php

// Démarrage de la session
session_start();

// Les fonctions PHP
require_once($_SERVER['DOCUMENT_ROOT'] . '../includes/functions.php');

// Récupération des données du Json et mise en session des données
$data = getJsonFile($_SERVER['DOCUMENT_ROOT'] . '../assets/punishment.json');
$SESSION['listePunitions'] = $data;

// ------------------------------ Affichage ------------------------------------------------ //

// Affichage « de la partie haute » commune du site
include('templates/header.php');

// Affichage « du tableau
include('templates/board.php');

// Affichage de la partie paramètres
include('templates/parameters.php');

// Affichage de la partie basse du site, commun à l'ensemble du site.
include('templates/footer.php');
