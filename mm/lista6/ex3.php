<?php
echo "Caixa eletronico- itaú<br>";
echo "1 Consultar saldo, 2 - fazer saque, 3- fazer deposito, 4 - ver extato, 5- sair<br>";

$opcao=3;
switch($opcao){
    case 1:
        echo "seu saldo é de R$500,00";
    case 2:
        echo "qual o valor do saque?";
    case 3:
        echo "qual o valor para deposito?";
    case 4: 
        echo "extrato da conta";
}
?>