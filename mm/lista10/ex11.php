<?php
// 1. Salva o valor inicial 50
apcu_store('pontos', 50);

// 2. Troca de 50 para 51 (Dá certo -> retorna true)
apcu_cas('pontos', 50, 51);

// 3. Tenta trocar de 50 para 100 (Falha -> retorna false, pois o valor atual já é 51)
$sucesso = apcu_cas('pontos', 50, 100);

var_dump($sucesso);         // bool(false)
echo apcu_fetch('pontos');  // 51

//Só funciona com a extensão