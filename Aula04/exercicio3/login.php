<?php
    $login = $_REQUEST["cslogin"];
    $senha = $_REQUEST["cssenha"];

    if($login == "etec" and $senha == "informática"){
        echo"Logado com sucesso!";
    }else{
        echo"Negado! Tente novamente";
    }
?>