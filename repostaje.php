<?php

class Repostaje {
    var $litros; 
    var $fecha;

    function __construct ($litros,$fecha) {
        $this->litros = $litros;
        $this->fecha = $fecha;
    }

    function setLitros ($litros) {
        $this->litros = $litros;
    }
    function getLitros () {
        return $this->litros;
    }
    function setFecha ($fecha) {
        $this->fecha = $fecha;
    }
    function getFecha () {
        return $this->fecha;
    }

    function mostrar () {
        echo "Litros :".$this->getLitros();
        echo "<br>";
        echo "Fecha :".$this->getFecha();
        echo "<br>";
    
        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->getFecha());
        $diff = $date1->diff($date2); //diferencia entre fechas

        /*
        echo "<pre>";
        print_r ($diff);
        echo "</pre>";
        */
        
        echo "Hace ".$diff->y;
        echo ($diff->y != 1) ? " años" : " año";  //if-else inline
        echo " ".$diff->m." ";;      
        echo ($diff->m != 1) ? " meses" : " mes"; //if-else inline
        echo " y ".$diff->d;
        echo ($diff->d != 1) ? " días" : " día";  //if-else inline   
        echo "desde el repostaje";

    /* Estas dos formas son equivalentes

    // FORMA INLINE
    echo ($diff->y == 1) ? " años" : " año"

    //FORMA NORMAL
    if ($diff->y == 1) {
	echo " años";
    }
    else {
	echo " año";
    } 
    */

    }
}

