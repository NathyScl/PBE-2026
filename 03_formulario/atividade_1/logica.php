<?php

$nome_cliente = $_POST['nome_cliente'];
$nome_evento = $_POST['nome_evento'];
$qtd = $_POST['qtd'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$tipo = $_POST['tipo'];

$preco = 45;
$total = $qtd * $preco;

echo "Nome do cliente: $nome_cliente <br>";
echo "Nome do evento: $nome_evento <br>";
echo "Quantidade: $qtd <br>";
echo "Data: $data <br>";
echo "Horário: $horario <br>";
echo "Tipo de ingresso: $tipo <br>";
echo "Valor total: R$ $total,00 <br>";

?>