<?php

class empleado
{

    private $nombre;
    private $sueldo;

    public function __construct($izena, $sueldo)
    {
        $this->nombre = $izena;
        $this->sueldo = $sueldo;
    }

    private function impuestos()
    {
        if ($this->sueldo > 3000) {
            echo $this->nombre, ", tu sueldo es ", $this->sueldo, " y tienes que pagar impuestos";
        } else {
            echo "tu sueldo es ", $this->sueldo, " y no tienes que pagar impuestos";
        }
    }
}
$empleado1 = new empleado("iker", 3500);
$empleado1->impuestos();
