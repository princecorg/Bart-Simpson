<?php

function getJsonFile($path)
{
    $jsonString = file_get_contents($path);
    // Décoder le JSON en un tableau associatif
    $data = json_decode($jsonString, true);
    // stocker le tableau associatif en session
    return $data;
}


function getPunitionAleatoire($saison)
{
    // Vérifier si la saison donnée existe dans le JSON
    if (isset($data['saisons'][$saison])) {
        // Récupérer les punitions de la saison donnée
        $punitions = $data['saisons'][$saison];

        // Choisir aléatoirement une punition et son nom d'épisode
        $punitionKeys = array_keys($punitions);
        $punitionAleatoireKey = array_rand($punitionKeys);
        $nomEpisode = $punitionKeys[$punitionAleatoireKey];
        $punitionAleatoire = $punitions[$nomEpisode];

        // Retourner un tableau associatif avec le nom de l'épisode et la punition
        return array('episode' => $nomEpisode, 'punition' => $punitionAleatoire);
    } else {
        // Si la saison donnée n'existe pas dans le JSON
        return array('episode' => '', 'punition' => "Saison non trouvée ou punition non disponible pour cette saison.");
    }
}

function showSelect($list)
{
    $optionNb = count($list['saisons']);
    $seasonNames = array_keys($list['saisons']);
    echo' <select id="saison" name="saison">';
    for($i = 0; $i < $optionNb; $i++) {
        echo' <option value="' . $seasonNames[$i] . '">' . $seasonNames[$i] . '</option>';
    }
    echo' </select>';
}
