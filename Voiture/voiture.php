<?php

class Voiture {
    private $_modele;
    private $_annee;
    private $_prix;

    public function Voiture() {
    }

    public function GetModele() {
        echo $this->_modele;
        return $this->_modele;
    }

    public function GetAnnee() {
        return $this->_annee;
    }

    public function GetPrix() {
        return $this->_prix;
    }

    public function SetModele($unModele) {
        $this->_modele = $unModele;
    }

    public function SetAnnee($uneAnnee) {
        $this->_annee = $uneAnnee;
    }

    public function SetPrix($unPrix) {
        $this->_prix = $unPrix;
    }
}


$voiture = new Voiture();