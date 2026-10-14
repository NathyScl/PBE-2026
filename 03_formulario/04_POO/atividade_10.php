<?php

class Carro {
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Abastecidos {$litros} litro(s) no {$this->modelo}.<br>";
        } else {
            echo "Erro: A quantidade de litros para abastecer deve ser positiva.<br>";
        }
    }

    public function dirigir($km) {
        $combustivelNecessario = $km / $this->consumo;

        if ($combustivelNecessario <= $this->tanque) {
            $this->tanque -= $combustivelNecessario;
            $combustivelFormatado = number_format($combustivelNecessario, 2, ',', '.');
            echo "O carro {$this->modelo} percorreu {$km} km e consumiu {$combustivelFormatado} litros.<br>";
        } else {
            echo "Não há combustível suficiente para percorrer a distância de {$km} km.<br>";
        }
    }

    public function exibirInfo() {
        $tanqueFormatado = number_format($this->tanque, 2, ',', '.');
        echo "Modelo: {$this->modelo} | Consumo: {$this->consumo} km/L | Tanque: {$tanqueFormatado} L<br>";
    }
}

$carro = new Carro("Honda Civic", 12, 20);
$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();

?>