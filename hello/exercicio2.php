<?php
/**
 * 2 - Cálculo de Média
 * Informar 3 notas e realizar a média aritimética. Se a média for menor que 4, o aluno está reprovado.
 * Se a média for menor 6 está de re recupeção. Caso contrário, o aluno está aprovado.
 *
 */

$n1 = 3;
$n2 = 3;
$n3 = 3;
$calculo = ($n1+$n2+$n3)/3;

if ($calculo < 4){
    echo 'Reprovado';
}elseif ($calculo < 6){
    echo 'Recuperação';
}else
    echo 'Aprovado';