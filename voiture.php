
<?php

class Voiture {
    private $_marque;
    private $_modele;
    private $_annee;
    private $_prix;


    public function Voiture() {
    }

    public function GetMarque() {
        return $this->_modele;
    }

    public function GetModele() {
        return $this->_modele;
    }
    public function GetAnnee() {
        return $this->_annee;
    }
    public function GetPrix() {
        return $this->_prix;
    }

    public function SetMarque($uneMarque){
        $this->_marque = $uneMarque;
    }
    public function SetModele($unModele){
        $this->_modele = $unModele;
    }
    public function SetAnnee($uneAnnee){
        $this->_annee = $uneAnnee;
    }
    public function SetPrix($unPrix){
        $this->_prix = $unPrix;
    }

}


$maVoiture = new Voiture();
$maVoiture->SetMarque("Mercedes");
$maVoiture->SetModele("Classe A 4 Berline");
$maVoiture->SetAnnee("2022");
$maVoiture->SetPrix("35000 €");

var_dump($maVoiture);
