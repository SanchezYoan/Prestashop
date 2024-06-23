


<?php


function displayCategories () {
    $categories = ["Habitacle & Electricité", "Equipement Pilote","Liaison au Sol & Freinage", "Carrosserie & Eclairage", "Moteur & Transmission"];

    echo "Veuillez sélectionner une catégorie : \n\r";

    foreach($categories as $categorie) {
        echo "\n- $categorie\n";
    }

}

function sendCategorie() {
    $displayCategories = displayCategories();
    $selectedCategorie = readline("$displayCategories");
    return $selectedCategorie;
}