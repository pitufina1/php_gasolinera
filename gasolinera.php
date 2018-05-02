<?php

require_once("Surtidor_gasolina.php");
require_once("Surtidor_gasoil.php");
require_once("Empleado.php");
require_once("Cliente.php");

class Gasolinera {
    var $ciudad;
    var $marca;
    var $clientes;
    var $empleados;
    var $surtidores;

    function __construct ($ciudad, $marca) {
        $this->ciudad = $ciudad;
        $this->marca = $marca;
        $this->clientes = array();
        $this->empleados = array();
        $this->surtidores = array();
    }

    function setCiudad ($ciudad) {
        $this->ciudad = $ciudad;
    }
    function getCiudad () {
        return $this->ciudad;
    }
    function setMarca ($marca) {
        $this->marca = $marca;
    }
    function getMarca () {
        return $this->marca;
    }
    function mostrar () {
        echo "Ciudad :".$this->getCiudad();
        echo "<br>";
        echo "Marca :".$this->getMarca();
        echo "<br>";

        ///para mostrar clientes, empleados y surtidores; need crear un bucle, ya que son vectores.

     /*   for ($i=0; $i < count ($this->clientes) ; $i++) { 
           $this->clientes[$i]->mostrar();
           echo "<br>";
        } 
        for ($i=0; $i < count ($this->empleados) ; $i++) { 
            $this->empleados[$i]->mostrar();
        }
        for ($i=0; $i < count ($this->surtidores) ; $i++) { 
            $this->surtidores[$i]->mostrar();
        }*/
    }
       
    /*POLITICA ALTA-> CLIENTE-> AL FINAL
      POLITICA BAJA-> CLIENTE-> ANULAR LA CASILLA
    */
    function altaCliente ($cliente){
        $this->clientes[] = $cliente; /// Este es el ejemplo de altaCliente que ha echo Jesús.
    }

   function bajaCliente($cif) {    /// Busca por cif y cuando lo encuentra lo anula
        $enc = false;
        for ($i=0; $i < count ($this->clientes) && ($enc==false); $i++) {
            if ($this->clientes[$i] != null){
                if ($this->clientes[$i]->getCif() == $cif){
                     $this->clientes[$i] = null;
                     $enc = true;
                }
            }
        }
    }

    function altaEmpleado ($empleado){
        $this->empleados[] = $empleado; /// Este es el ejemplo de altaEmpleado que ha echo Jesús.
    }

    function bajaEmpleado ($nombreempleado) { //// voy x aki
        $enc = false;
        for ($i=0; $i < count($this->empleados) && ($enc==false); $i++) { 
            if ($this->empleados[$i] != null){
                if ($this->empleados[$i] == $nombreempleado){
                    $this->empleados[$i] = null;
                    $enc = true;
                }
            }
        }
    }

    function anadirSurtidor ($surtidor) {
        $this->surtidores[] = $surtidor;
    }

    function bajaSurtidor (){
    }
}