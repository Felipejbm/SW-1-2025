<?php

class Carro{
    public $Marca;
    public $Modelo;
    public $Combustivel;
    public $Portas;
    public $Capacidade_tanque;

    public function MostrarDados(){
        echo"A marca do carro é:" . $this->Marca . "<br>";
        echo"A modelo do carro é:" . $this->Modelo . "<br>";
        echo"A combustível do carro é:" . $this->Combustivel . "<br>";
        echo"A quantidade de portas do carro é:" . $this->Portas . "<br>";
        echo"A capacidade do tanque do carro é:" . $this->Capacidade_tanque . "<br>";
        echo"<hr>";
    }
}