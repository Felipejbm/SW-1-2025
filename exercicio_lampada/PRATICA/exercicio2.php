<?php
    include_once'carro.class.php';

    $carro1 = new Carro;
    $carro1 -> Marca = "Toyota";
    $carro1 -> Modelo = "Corola";
    $carro1 -> Combustivel = "Gasolina";
    $carro1 -> Portas = 4;
    $carro1 -> Capacidade_tanque = 50; 

    $carro2 = new Carro;
    $carro2 -> Marca = "Hyundai";
    $carro2 -> Modelo = "Veloster";
    $carro2 -> Combustivel = "Alcool";
    $carro2 -> Portas = 3;
    $carro2 -> Capacidade_tanque = 80;

    $carro3 = new Carro;
    $carro3 -> Marca = "Chevrolet";
    $carro3 -> Modelo = "S10";
    $carro3 -> Combustivel = "Elétrico";
    $carro3 -> Portas = 4;
    $carro3 -> Capacidade_tanque = "641w";

    $carro4 = new Carro;
    $carro4 -> Marca = "Fiat";
    $carro4 -> Modelo = "Idea";
    $carro4 -> Combustivel = "Gasolina";
    $carro4 -> Portas = 4;
    $carro4 -> Capacidade_tanque = 1864;

    $carro5 = new Carro;
    $carro5 -> Marca = "Volkswagen";
    $carro5 -> Modelo = "Gol";
    $carro5 -> Combustivel = "Gasolina";
    $carro5 -> Portas = 2;
    $carro5 -> Capacidade_tanque = 6546;

    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();