<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor > $this->Saldo){
                $resultado = "Saldo insuficiente. <br>";
                return $resultado;
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $resultado = "Saldo atualziado para: R$". $this->Saldo ."<br>";
                return $resultado;
            }
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $resultado = "Saldo atualziado para: R$". $this->Saldo ."<br>";
            return $this->Saldo;
        }
        public function ExibirSaldo(){
            echo"Nome: " . $this-> Nome . "<br>";
            echo"Cpf: " . $this-> Cpf . "<br>";
            echo"Saldo Atual: R$" . $this->Saldo . "<br>";
            echo"<hr>";
        }
    }