<?php
abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;
  
  public function GetColor()
  {
      return $this->color;
  }

public function SetColor($color)
{
    $this->color = $color;
}

public function ToString()
{
    echo"Color:".$this->color."<br>Perimetro:".$this->perimetro."<br>Superficie:".$this->superficie;
}

function __construct()
{
  $this->color = "";
  $this->perimetro = 0;
  $this->superficie = 0;
}
abstract public function Dibujar();
abstract protected function CalcularDatos();


}
?>