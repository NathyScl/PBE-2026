
<?php

function verificarIdade($idade) {
    if ($idade >= 18) {
        return "Maior idade";
    } else {
        return "Menor idade";
    }
}

$idade1 = 15;
$idade2 = 20;
$idade3 = 28;

$resultado = verificarIdade($idade1);
echo "A idade $idade1 é $resultado <br>";

$resultado = verificarIdade($idade2);
echo "A idade $idade2 é $resultado <br>";

$resultado = verificarIdade($idade3);
echo "A idade $idade3 é $resultado <br>";

?>