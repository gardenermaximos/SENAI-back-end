<?php

$peso = 70; 
$altura = 1.75; 
$imc = $peso / ($altura * $altura);

if ($imc < 19) {
    echo "Classificação: Abaixo do Peso Ideal";
} elseif ($imc <= 24) {
    echo "Classificação: Peso Ideal";
} elseif ($imc <= 29) {
    echo "Classificação: Sobrepeso";
} elseif ($imc <= 34) {
    echo "Classificação: Obesidade Grau I";
} elseif ($imc <= 39) {
    echo "Classificação: Obesidade Grau II";
} else {
    echo "Classificação: Obesidade Grau III";
}
?>