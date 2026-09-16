<?php

function analisarNumero($numero) {
    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero * $numero;

    if ($numero >= 0) {
        $positividade = "Positivo";
    } else {
        $positividade = "Negativo";
    }

    return [
        "Numero" => $numero,
        "Dobro" => $dobro,
        "Triplo" => $triplo,
        "Quadrado" => $quadrado,
        "Situacao" => $positividade
    ];
}

$resultado = analisarNumero(5);

echo "Número: " . $resultado["Numero"] . "<br>";
echo "Dobro: " . $resultado["Dobro"] . "<br>";
echo "Triplo: " . $resultado["Triplo"] . "<br>";
echo "Quadrado: " . $resultado["Quadrado"] . "<br>";
echo "Situação: " . $resultado["Situacao"];

?>