<?php

    class Produto{
        private $Produto;
        private $Preco;
        private $Quantidade;

        public function __construct($Produto2,$Preco2,$Quantidade2 = 0){
            $this->Produto = $Produto2;
            $this->Preco = $Preco2;
            $this->Quantidade = $Quantidade2;
        }

        public function getProduto(){
            return $this->Produto;
        }

        public function setProduto($Produto2){
            return $this->Produto = $Produto2;
        }

        public function getPreco(){
            return $this->Preco;
        }

        public function setPreco($preco2){
            return $this->Preco += $preco2;
        }

        public function adicionarEstoque($qtd){
            $this->Quantidade += $qtd;
        }

        public function removerEstoque($qtd){
            $this->Quantidade -= $qtd;
        }

        public function MostrarDetalhes(){
            echo"Produto:" . $this->Produto . "<br>";
            echo"Preço:" . $this->Preco . "<br>";
            echo"Quantidade em estoque:" . $this->Quantidade . "<br>";
            echo"<hr>";

        }
    }