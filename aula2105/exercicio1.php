<?php

include_once 'produto.class.php';

$produto1 = new Produto('banana',5,20);

$produto1-> MostrarDetalhes();

$produto1-> setPreco(5);

$produto1-> adicionarEstoque(30);

$produto1-> MostrarDetalhes();
