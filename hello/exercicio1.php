<?php
//Criar duas variaveis que armazenará o nome e o sobrenome.
//Em seguida cria uma variavél para armazenar a idade. Imprima no video o nome, sobrenome, idade e diga se a pessoa
// é maior de idade.

$nome = 'Felipe';
$sobrenome = 'Yuri';
$idade = 9;

echo $nome.' '.$sobrenome.' '.$idade;
echo '<br/>';
if ($idade > 18){
    echo 'usuario maior de idade';
} else {
    echo 'usuario menor de idade';
}
