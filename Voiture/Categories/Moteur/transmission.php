<?php

class Transmission extends MoteursTransmissions {
    private $_volantMoteur;
    private $_quickShift;
    private $_coupleCourt;

    public function getTransmission() {
        $res = $this->_volantMoteur;
        echo $res;
        return $res;
    }

    public function getQuickShift() {
        $res = $this->_quickShift;
        echo $res;
        return $res;
    }

    public function getCoupleCourt() {
        $res = $this->_coupleCourt;
        return $res;
    }

    public function setTransmission($marques) {
        $this->_volantMoteur = $marques;
        return $this->_volantMoteur;
    }

    public function setQuickShift($marques) {
        $this->_quickShift = $marques;
        return $this->_quickShift;
    }

    public function setCoupleCourt($marques) {
        $this->_coupleCourt = $marques;
        return $this->_coupleCourt;
    }
}

function selectMarque() {
    $res = readline("Choisissez une marque: \n");
    // $moteur->getMarques();
}
// selectMarque();
