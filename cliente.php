<?php

require_once("Persona.php");
require_once("Repostaje.php");

class Cliente extends Persona {
    var $cif; 
    var $repostajes;

    function __construct ($nombre,$cif) {
        parent::__construct ($nombre);
        $this->cif = $cif;
        $this->repostajes = array();
    }
    function setCif ($cif) {
        $this->cif = $cif;
    }
    function getCif () {
        return $this->cif;
    }
    function setRepostaje ($repostaje) {
        $this->repostajes = $repostajes;
    }
    function getRepostaje () {
        return $this->repostajes;
    }
   
    function anadirRepostajeUno($repostaje){
        $this->repostajes[] = $repostaje;
    }
    
    function anadirRepostajeDos($litros, $fecha){
        $aux = new Repostaje ($litros, $fecha);
        $this->repostajes[] = $aux;
    }

    /// las dos funciones de añadir repostaje son iguales,difieren en las variables que muestran

    function mostrar () {
        parent::mostrar();
        echo "Cif :".$this->getCif();

        for ($i=0; $i < count ($this->repostajes) ; $i++) { 
            $this->repostajes[$i]->mostrar();
        }
    }
}