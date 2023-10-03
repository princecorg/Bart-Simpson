<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère la valeur du select "seasonSelect"
    $seasonSelected = $_POST['seasonSelect'];
    $_SESSION['seasonSelected'] = $seasonSelected;
    header("Location: ../index.php");
    exit;
}
