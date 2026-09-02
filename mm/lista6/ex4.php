<?php
echo "Menu-Leitoa Pizzaiola";
echo "1 Pizza, 2 - Hambúrger, 3- Refrigerante, 4 - Sobremesa, 5- Sair<br>";

$opcao=3;
switch($opcao){

    case 1:
        echo "Pedir Cheese Pizza";
        break;
    case 2:
        echo "Pedir Hambúger Guilherme";
        break;
    case 3:
        echo "Pedir Refrigerante";
        break;
    case 4: 
        echo "Pedir Sobremesa Kenzo";
        break;
    case 5: 
        echo "Sair";
        break;
    default:
        echo "Inválido";
}
?>

//Exercício 5
Diferença entre if/else para o switch/case
O if-else testa condições variadas e complexas (como faixas de idade ou maior/menor que).O switch-case testa apenas valores fixos e exatos de uma única variável (como opções de um menu).