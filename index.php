<?php

// Démarrage de la session
session_start();

// Affichage « de la partie haute » commune du site
include('includes/header.php');

// Affichage « du tableau
include('includes/board.php');

// Affichage de la partie paramètres
include('includes/parameters.php');

// Affichage de la partie basse du site, commun à l'ensemble du site.
include('includes/footer.php');

// // Récupération des données JSON avec les données des élèves et de leurs punitions
// $jsonData =  file_get_contents("url du fichier");


// // Charger le JSON dans un tableau associatif
// $data = json_decode($jsonData, true);

// // Afficher les informations sur les élèves
// foreach ($data['eleves'] as $eleve) {
//     echo "Élève : {$eleve['prenom']} {$eleve['nom']}, Classe : {$eleve['classe']}<br>";

//     // Afficher les punitions de l'élève
//     echo "Punitions :<br>";
//     foreach ($eleve['punitions'] as $punition) {
//         echo "- Type : {$punition['type']}, Nombre : {$punition['nombre']}<br>";
//     }
//     echo "<br>";
// }

// // Calculer le nombre total de punitions de Bart Simpson
// $bartPunitions = 0;
// foreach ($data['eleves'] as $eleve) {
//     if ($eleve['prenom'] === 'Bart') {
//         foreach ($eleve['punitions'] as $punition) {
//             $bartPunitions += $punition['nombre'];
//         }
//     }
// }

// echo "Le nombre total de punitions de Bart Simpson est : $bartPunitions";
