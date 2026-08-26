<?php

$nota1 = 10;
$nota2 = 8;
$frequencia = 67;
$media = ($nota1 + $nota2)/2;

if($frequencia > 75 && $media >= 6){
    echo "Aprovado";
}else{
    echo "Reprovado";
}
?>