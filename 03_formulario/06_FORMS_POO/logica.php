<?php
// estou no lógica.php
require_once  "produto.php";

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$produto = new produto($nome, $quantidade, $preco);

require_once "view_relatorio.php";