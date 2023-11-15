<?php

class Bebida extends Articulo
{
    private $alcoholicas;
    public function __construct($nombre, $coste, $precio, $contador, $alcoholicas)
    {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->alcoholicas = $alcoholicas;
    }

    public function getAlcoholicas()
    {
        return $this->alcoholicas;
    }

    public function setIngredientes($alcoholicas)
    {
        $this->alcoholicas = $alcoholicas;
    }

}
?>
