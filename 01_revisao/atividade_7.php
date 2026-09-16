<?php
$notasAlunos + [
    "Ana" => 8.5,
    "Bruno"=> 7.66,
    "Carla" => 9.2,
    "Roberto" => 7.0,
    "Marlena" => 7.9
    



    foreach ($nomeAlunos as $nome => $nota){

    $notaformatas = number_format($nota, 1,',', '');
    echo "O aluno $nome tirou nota $notaformatas. <br>";

    $somaNotas += $nota; // $somaNotas = $somaNotas + $nota

    }
    $mediaTurnma = $somaNotas / $TotalAlunos;
    $mediaTurma = number_formart($mediaTurma, 2, ',', '');

    echo <br>