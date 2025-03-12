<?php
    $user = $_POST['csuser'];
    $psw = $_POST['cspsw'];

    if($user == "aluno@gmail.com" and $psw == "12345"){
        echo"Autorizado";
        header('Location: painel/autorizado.php');
    }else{
        echo"Não autorizado";
        header('Location: painel/nao_autorizado.php');
    };
?>