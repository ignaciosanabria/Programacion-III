<?php
class Rectangulo extends FiguraGeometrica
{
public $ladoUno;
public $ladoDos;

function __construct($l1,$l2)
{
    $this->ladoUno = $l1;
    $this->ladoDos = $l2;
    $this->CalcularDatos();
}

protected function Dibujar()
{

}

protected function CalcularDatos()
{
    $this->perimetro = ($this->ladoUno + $this->ladoDos)*2;
    $this->superficie = ($this->ladoUno * $this->ladoDos)*2;
}


}


?>