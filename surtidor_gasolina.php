<?php

require_once("Surtidor.php");

class SurtidorGasolina extends Surtidor {
    var $octanaje; 

    function __construct ($precio,$octanaje) {
        parent::__construct ($precio);
        $this->octanaje = $octanaje;
    }
    function setOctanaje ($octanaje) {
        $this->octanaje = $octanaje;
    }
    function getOctanaje () {
        return $this->octanaje;
    }
    function mostrar () {
        parent::mostrar();
        
        echo "Octanaje :".$this->getOctanaje();
    }
}