<?php

class ContaBancaria {

	public $titular;
	public $numero;
	public $saldo;
	public $tipo;

	function depositar($valor) {
		$this->saldo = $this->saldo + $valor;
		echo "Depósito de R$ " . $valor . " realizado.<br>";
	}

	function sacar($valor) {
		if ($valor <= $this->saldo) {
			$this->saldo = $this->saldo - $valor;
			echo "Saque de R$ " . $valor . " realizado.<br>";
		} else {
			echo "Saldo insuficiente para realizar o saque.<br>";
		}
	}

	function consultarSaldo() {
		echo "Saldo atual: R$ " . $this->saldo . "<br>";
	}

}

$conta1 = new ContaBancaria();

$conta1->titular = "João";
$conta1->numero = "001";
$conta1->saldo = 1000;
$conta1->tipo = "Corrente";

echo "Titular: " . $conta1->titular . "<br>";
echo "Numero: " . $conta1->numero . "<br>";
echo "Tipo: " . $conta1->tipo . "<br>";

$conta1->consultarSaldo();
$conta1->depositar(500);
$conta1->consultarSaldo();
$conta1->sacar(200);
$conta1->consultarSaldo();
echo "<hr>";

$conta2 = new ContaBancaria();
$conta2->titular = "Maria";
$conta2->numero = "002";
$conta2->saldo = 2500;
$conta2->tipo = "Poupança";

echo "Titular: " . $conta2->titular . "<br>";
echo "Número: " . $conta2->numero . "<br>";
echo "Tipo: " . $conta2->tipo . "<br>";

$conta2->consultarSaldo();
$conta2->depositar(1000);
$conta2->consultarSaldo();
$conta2->sacar(700);
$conta2->consultarSaldo();