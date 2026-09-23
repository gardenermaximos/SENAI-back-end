<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$servico = $_POST["servico"];
$corte = 30;
$barba = 20;
$barba_corte = 45;

if($servico == "Corte"){
    echo "$nome, ", $idade, ", anos, serviço: Corte R$ ", $corte;
}elseif($servico == "Barba"){
    echo "$nome, ", $idade, ", anos, serviço: Barba R$ ", $barba;
}elseif($servico == "Corte + Barba"){
    echo "$nome, ", $idade, ", anos, serviço: Corte + Barba R$ ", $barba_corte;
}else{
    echo "Serviço não encontrado";
}

?>

