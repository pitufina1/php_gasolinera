<?php

require_once("Gasolinera.php");

/*
$gaso1 = new Gasolinera ("Alburquerque", "GALP");

$c1 = new Cliente ("Juan", "01234567A");
$c2 = new Cliente ("Pepe", "00000001A");
$c3 = new Cliente ("Antonio", "00000002A");

//Llamando a la funcion anadirRepostajeUno

$repo1 = new Repostaje (50, "2018-04-01");
$c1->anadirRepostajeUno ($repo1);

//Llamando a la funcion anadirRepostajeDos
$c1->anadirRepostajeDos (50, "2018-04-02");


$gaso1->altaCliente ($c1);


$e = new Empleado ("Sandra", 1);
$e1 = new Empleado ("Pedro", 3);
$gaso1->altaEmpleado ($e);
$gaso1->altaEmpleado ($e1);
*/

$s1 = new SurtidorGasolina (1.40, "95");
$s2 = new SurtidorGasolina (1.40, "95");
$s3 = new SurtidorGasolina (1.40, "95");
$s4 = new SurtidorGasoil (1.15, false);
$s5 = new SurtidorGasoil (1.15, false);
$s6 = new SurtidorGasoil (1.15, false);
$gaso1->anadirSurtidor ($s1);
$gaso1->anadirSurtidor ($s2);
$gaso1->anadirSurtidor ($s3);
$gaso1->anadirSurtidor ($s4);
$gaso1->anadirSurtidor ($s5);
$gaso1->anadirSurtidor ($s6);
$gaso1->mostrar();

// Llamar a la funcion altaCliente añadir cliente, crear 3 y dar de baja 1.
/*
$c1 = new Cliente ("Juan", "01234567A");
$c2 = new Cliente ("Pepe", "00000001A");
$c3 = new Cliente ("Antonio", "00000002A");

$gaso1 = new Gasolinera ("Alburquerque", "GALP");
$gaso1->altaCliente ($c1);
$gaso1->altaCliente ($c2);
$gaso1->altaCliente ($c3);
$gaso1->mostrar();

$gaso1->bajaCliente ("00000002A");
$gaso1->mostrar();
*/


echo "<pre>";
print_r ($gaso1);
echo "</pre>";