<?php

$faturas = [200, 300, 250, 500, 600, 312];

echo "Resumo das faturas do seu cartão";
foreach($faturas as $num){
    echo "$num <br>";
    $soma = $soma + $num;
}

echo "O resumo atual de sua fatura é: R$ $soma";

?>