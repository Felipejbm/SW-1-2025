<?php
    class livro{
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor, $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;

    }    
        public function exibirstatus() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "O livro '{$this->titulo}' foi emprestado.<br>";
        } else {
            echo "Desculpe, o livro '{$this->titulo}' não está disponível no momento.<br>";
        }
    }
}