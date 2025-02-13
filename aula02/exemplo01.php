<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exemeplo 01.php</title>
</head>
<body>
    <?php
        $nome = "Felipe"
    ?>

    <h1>
        AULA 02 INTRODUTÓRIA DE PHP
    </h1>
    <h2>
        Aluno Felipe José
    </h2>
    <p>
        Oie
    </p>
    <?php
        echo"<p> Oi sou o Felipe </p>";
        echo"<p> Oi sou o $nome"; 
        echo"<p> Oi  sou o" . $nome . "</p>"
    ?>
    
</body>
</html>