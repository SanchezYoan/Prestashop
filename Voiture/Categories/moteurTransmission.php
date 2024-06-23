<?php
require_once "../voiture.php";

class MoteursTransmissions extends Voiture {


    private $_marques = ["Forge", "Bratex", "Pipercross"];

    public function getMarques() {
        return $this->_marques;
    }
    
}

$result = new MoteursTransmissions();

echo $result->getMarques();