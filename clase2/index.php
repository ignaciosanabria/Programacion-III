<?php
require("funciones.php");
//require("noexiste.php");
require_once("funciones.php");// EL require frena la aplicacion
$resultado = Sumar(2,3);
var_dump($resultado);
require_once("calculadora.php");
$resultado2 = calculadora::Sumar(3,6);
var_dump($resultado2);
calculadora::$atributoestatico = 10;
var_dump(calculadora::$atributoestatico);
$micalculadora = new calculadora();
var_dump($micalculadora->atributodeinstancia);
require("ejercicio15.php");
require("rectangulo.php");
$mirectangulo = new rectangulo();
var_dump($mirectangulo);
?>