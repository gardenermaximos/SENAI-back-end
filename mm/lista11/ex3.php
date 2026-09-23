<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$corte = 6;
$media = ($n1+$n2+$n3)/3;

if($media>=$corte){
    echo "A média é: ", $media, ", Aprovado";
}
else{
    echo "A média é: ", $media, ", Reprovado";
}
?>

