<?php
$nome = $_POST['nome_completo'];
$Salario_Bruto = $_POST['Nota1'];
$Horas_extras = $_POST['Nota2'];
$Beneficios = $_POST['Nota3'];

$media = ($nota1 + $nota2 + $nota3)/3;

if($media > 10){
    $media = 10;
}
 
require_once "view_relatorio.php";
 ?>