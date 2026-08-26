<?php

$nome = "joao";
$nivel_acesso =2;

if ($nivel_acesso ==1){
    echo "Acesso básico";
}
else if($nivel_acesso ==2){
    echo "Acesso intermediário";

}else if($nivel_acesso ==3){
    echo "Acesso Administrativo";

}else{
    echo"Acesso inválido";
}
?>
