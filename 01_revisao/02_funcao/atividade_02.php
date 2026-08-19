
<?php


function verificarIdade($Idade) {
    if($Idade >= 18){
        return "Maior idade";
    }else{
        return "Menor idade";
    }
}


$idade1 = 15;
$idade2 = 20;
$idade3 = 28;


$resultado = verificarMaioridade($idade1);
echo "A idade $idade1 é $resultado <br>";


$resultado = verificarMaioridade($idade2);
echo "A idade $idade2 é $resultado <br>";


$resultado = verificarMaioridade($idade3);
echo "A idade $idade3 é $resultado <br>";


?>
