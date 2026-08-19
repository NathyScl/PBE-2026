<?php
$frequencia = 90;
$nota = 9;


echo "Nathy - ";


if ($frequencia < 75) {
    echo "Reprovado por falta";
}
elseif ($nota > 7) {
    echo "Aprovado";
}
elseif ($nota > 5) {
    echo "Recuperação";
}
else {
    echo "Reprovado";
}
?>
