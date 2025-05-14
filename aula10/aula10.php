<?php

    include_once 'conta.class.php';

    $conta1 = new Conta();

    $conta1-> Nome = "Felipe José";
    $conta1-> Cpf = "42398023850";
    //$conta1-> Saldo = "42398023850";

    $conta1-> ExibirSaldo();

    $conta1-> Depositar(500);

    $conta1-> ExibirSaldo();

    echo $conta1-> Sacar(100);

    $conta1-> ExibirSaldo();

    $conta1-> Depositar(500);

    $conta1-> ExibirSaldo();
