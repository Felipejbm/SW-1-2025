<?php
    $nome = $_REQUEST["cxnome"];
    $nota1 = $_REQUEST["cxnota1"];
    $nota2 = $_REQUEST["cxnota2"];
    $nota3 = $_REQUEST["cxnota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo"Olá $nome! Sua média de nota é de: $media"; 
?>