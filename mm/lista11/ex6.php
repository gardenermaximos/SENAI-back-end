<?php

$nome = $_POST["nome"];
$horas = $_POST["horas"];

$horas_ano = $horas * 365;
$anos = (($horas_ano*80) / 24) / 365;

echo "Olá $nome <br><br>";
echo "Você passa aproximadamente $horas_ano hrs por ano <br><br>";
echo "Isso representa aproximadamente $anos anos da sua vida";

?>

