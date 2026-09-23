<?php

$kg = $_POST["kg"];
$kilos_exc = $kg-50;
if($kg>50){
    $multa_total = 4*$kilos_exc;
    echo"Você deve pagar R$ $multa_total de multa";
}else{
    echo"Você não precisa pagar multa";
}
?>