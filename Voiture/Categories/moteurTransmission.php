<?php
require "../voiture.php";
include "./selectedCategorie.php";

class MoteursTransmissions extends Voiture {

    private $_categorie;
    private $_marques = ["Forge", "Bratex", "Pipercross"];

    public function getMarques() {
        foreach($this->_marques as $marque) {
            echo "$marque\n";
        }

    }
    public function setCategorie(string $categorie) {
        $this->_categorie = $categorie;
        // echo "$this->_categorie";
        return $this->_categorie;
    }

    
}

$moteur = new MoteursTransmissions();
$moteur->getMarques();
$moteur->setCategorie(sendCategorie());