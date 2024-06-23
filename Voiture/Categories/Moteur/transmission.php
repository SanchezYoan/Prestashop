

<?php
require_once "voiture.php";

class transmission extends Voiture {
    
    public function suceumabite() {
        $res = $this->_modele;
        return $res;
    }
}

$result = new moteur();

echo $result->suceumabite();