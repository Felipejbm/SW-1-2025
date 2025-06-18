<?php
    include_once 'exercicio_03.php';
    $funcionario = new funcionario("João Silva", 1000.00);
    $funcionario->aumentarsalario(10);
    $funcionario->exibirinformaçoes();
?>