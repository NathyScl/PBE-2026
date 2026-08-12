<?php
$idade = 15;
// idade da pessoa
$acompanhado = true;
// true está acompanhado, false não está acompanhado

if ($idade >= 18) {
    echo "Entrada liberada";
} elseif ($idade >= 14 && $idade < 18 && $acompanhado) {
    // Entre 14 e 17 anos e acompanhado
    echo "Entrada liberada com acompanhante";
} else {
    // Menores de 14 anos ou 14-17 não acompanhados
    echo "Entrada negada X";
}
?>