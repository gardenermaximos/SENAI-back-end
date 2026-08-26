<?php

$usuario = "miguel";
$idade = 27;

if ($idade < 13){
    echo "Cadastro não permitido";
}
else if($idade >= 13 && $idade < 16){
 echo"Só pode usar com controle parental";
}else{
    echo"Plataforma liberada";
}
?>
