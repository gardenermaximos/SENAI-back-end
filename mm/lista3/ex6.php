<?php

$valPedido = 100;
$entMin = 50;
$idadeCliente = 19;
$idadeMinBebidaAlc = 18;
$estoque = 20;
$quantPedida = 20;
$status = "pago";

if(valPedido>=entMin){
    echo "Entrega grátis";
}
else{
    echo "taxa 10,00";
}
if(idadeCliente>=18){
    echo "Pode comprar bebida alcólica";
}
else{
    echo "Proibido bebida alcólica";
}
if(quantPedida<=estoque){
    echo "Pedido aceito";
}
else{
    echo "Pedido recusado(excedente)";
}
if(status == "pago"){
    echo "Liberar para produção";
}
else{
    echo "Impedir produção";
}
?>