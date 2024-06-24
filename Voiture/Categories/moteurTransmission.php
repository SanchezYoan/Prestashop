<?php
require '../voiture.php';
require './selectedCategorie.php';

class MoteursTransmissions extends Voiture {
    private $_categorie;
    private $_marques = ["Forge", "Bratex", "Pipercross"];

    public function getMarques() {
        foreach ($this->_marques as $marque) {
            echo "$marque\n";
        }
    }

    public function setCategorie(string $categorie) {
        $this->_categorie = $categorie;
        return $this->_categorie;
    }
}



function choiceProduct() {
    $moteur = new MoteursTransmissions();
    $moteur->setCategorie(sendCategorie());
    $moteur->getMarques();
}


class Transmission extends MoteursTransmissions {
    private $_typeOfProduct;
    private $_selectedMarque;

    public function getTransmission() {
        $res = $this->_typeOfProduct;
        echo $res;
        return $res;
    }

    public function getQuickShift() {
        $res = $this->_typeOfProduct;
        echo $res;
        return $res;
    }

    public function getCoupleCourt() {
        $res = $this->_typeOfProduct;
        return $res;
    }


    public function setTransmission(string $typeOfProduct, string $selectMarque) {
        $this->_typeOfProduct = $typeOfProduct;
        echo "Un $this->_typeOfProduct de la marque $selectMarque à été ajouté\n";
        mail(
            "yoan30470@hotmail.fr",
            "Ajout de produit",
            "Un nouveau produit $this->_typeOfProduct a été ajouté",
        );
        echo "Mail envoyé à l'Admin";
        return $this->_typeOfProduct;
    }

    public function setQuickShift(string $typeOfProduct, string $selectMarque) {
        $this->_typeOfProduct = $typeOfProduct ;
        echo "Un $this->_typeOfProduct de la marque $selectMarque à été ajouté\n";
        mail(
            "yoan30470@hotmail.fr",
            "Ajout de produit",
            "Un nouveau produit $this->_typeOfProduct a été ajouté",
        );
        echo "Mail envoyé à l'Admin";
        return $this->$_typeOfProduct;
    }

    public function setCoupleCourt(string $typeOfProduct, string $selectMarque) {
        $this->_typeOfProduct = $typeOfProduct ;
        echo "Un $this->_typeOfProduct de la marque  $selectMarque à été ajouté\n";
        mail(
            "yoan30470@hotmail.fr",
            "Ajout de produit",
            "Un nouveau produit $this->_typeOfProduct a été ajouté",
        );
        echo "Mail envoyé à l'Admin";
        return $this->_typeOfProduct;
    }

    public function setMarque() {
        $response = readline("Choisissez une marque\n");
        $this->_selectedMarque = $response;
        echo "Vous avez selectionné " . $this->_selectedMarque . "\n";
        return $this->_selectedMarque;
    }

}

function addProduct() {
    $transmission = new Transmission();
    choiceProduct();
    $selectMarque = $transmission->setMarque();
    $response = readline("Que voulez vous ajouter ?\n- (1) volantMoteur\n- (2) quick shift\n- (3) couple court");

    switch ($response) {
        case "1":
            $volantMoteur = new Transmission();
            $volantMoteur->setTransmission("volant moteur", $selectMarque);
        case "2":
            $quickShift = new Transmission();
            $quickShift->setQuickShift("quick shift", $selectMarque);
        case "3":
            $coupleCourt = new Transmission();
            $coupleCourt->setCoupleCourt("couple court", $selectMarque);
        default:
            // echo "commande non reconnue";
            return null;
    }
}

addProduct();