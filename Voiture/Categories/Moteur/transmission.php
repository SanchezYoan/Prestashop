

<?php
require "../moteurTransmission.php";

class transmission extends moteurTransmission {
    private$_volantMoteur;
    private$_quickShift;
    private$_coupleCourt;

    public function getTransmision() {
        $res = $this->_volantMoteur;
        return $res;
    }
    public function getQuickShift() {
        $res = $this->_quickShift;
        return $res;
    }
    public function getCoupleCourt() {
        $res = $this->_coupleCourt;
        return $res;
    }

    public function setTransmision($marques) {
        $res = $this->_volantMoteur;
        return $res;
    }
    public function setQuickShift($marques) {
        $res = $this->_quickShift;
        return $res;
    }
    public function setCoupleCourt($marques) {
        $res = $this->_coupleCourt;
        return $res;
    }


}

$moteur->getMarques();
// $transmission = new transmission();
