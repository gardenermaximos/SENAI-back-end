<?php

$nomeCompleto = "Marllon Pereira";
$senha = 1234;
$confirmarSenha = 1234;
$idade = 18;

if($nomeCompleto != "" & $senha == $confirmarSenha && $idade>=18){
    echo "Cadastro liberado";
}
else{
    echo "Cadastro não permitido";
}
?>