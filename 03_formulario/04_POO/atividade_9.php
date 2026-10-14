<?php

class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Venda de {$quantidade} unidade(s) de {$this->nome} realizada!<br>";
        } else {
            echo "Estoque insuficiente para realizar a venda de {$quantidade} unidade(s).<br>";
        }
    }

    public function reajustarPreco($percentual) {
        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo() {
        $precoFormatado = number_format($this->preco, 2, ',', '.');
        echo "{$this->nome} - R$ {$precoFormatado} | Estoque: {$this->estoque} unidades<br>";
    }
}

$p1 = new Produto("Teclado Gamer", 250, 10);
$p1->exibirInfo();

$p1->vender(2);
$p1->reajustarPreco(10);
$p1->exibirInfo();

?>