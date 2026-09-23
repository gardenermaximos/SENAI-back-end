<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "mm@gmail.com" && $senha == "123") {
    echo"Login, bem sucedido";
}else{
    echo"Login ou senha inválidos";
}
