<!-- 
Criar um algoritmo que receba três números. Ele deverá receber o start da contagem, o valor final da contagem
e a quantidade de passos que o usuário quer. Ao final, o programa deverá mostrar a contagem conforme o usuário escolheu.
 
O aluno deverá entregar o fluxograma e o código em php
 
Ex.: 
Usuário digitou as seguintes entradas:
starter    = 6
valorFinal = 11
passo      = 2
 
O programa deverá mostrar:
 
6 - INÍCIO
8
10 - FIM
-->




<?php

$starter = $_POST['starter'];
$valorFinal = $_POST['valorFinal'];
$passo = $_POST['passo'];
$i = $starter;


echo "<h3>Contagem de $starter até $valorFinal, de $passo em $passo:</h3>";

for ($i = $starter; $i <= $valorFinal; $i += $passo) {
    if ($i == $starter) {
        echo "$i - INÍCIO<br>";
    } elseif ($i + $passo > $valorFinal) {
        echo "$i - FIM<br>";
    } else {
        echo "$i<br>";
    }
}
