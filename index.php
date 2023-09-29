<?php

// Démarrage de la session
session_start();

// Affichage « de la partie haute » commune du site
include('templates/header.php');

// Affichage « du tableau
include('templates/board.php');

// Affichage de la partie paramètres
include('templates/parameters.php');

// Affichage de la partie basse du site, commun à l'ensemble du site.
include('templates/footer.php');
