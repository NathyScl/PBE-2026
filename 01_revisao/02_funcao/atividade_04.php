<?php

function analisarNotas($nota1, $nota2, $nota3) {

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "Media" => $media,
        "Maior" => max($nota1, $nota2, $nota3),
        "Menor" => min($nota1, $nota2, $nota3),
        "Situacao" => $situacao
    ];
}

$resultado = analisarNotas(9, 8, 6);

echo "Média: " . $resultado["Media"] . "<br>";
echo "Maior nota: " . $resultado["Maior"] . "<br>";
echo "Menor nota: " . $resultado["Menor"] . "<br>";
echo "Situação: " . $resultado["Situacao"];

?>