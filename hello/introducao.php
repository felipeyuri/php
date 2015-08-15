<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $sobrenome = 'Yuri';
    $nome = 'Felipe '.$sobrenome;
    echo '<p>Concatenação</p>';
    echo $nome . '<br/>';

    echo '<p>Casting - Conversão de dados';
    $val1 = (float)'2.5';
    $val2 = '8';
    var_dump($val1);
    $soma = $val1 + $val2;

    if($soma > 10){
        echo $soma;
    } else {
        echo 'Valor menor que 10';
    }
?>
</body>
</html>
