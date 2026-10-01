<?php

class Celular {
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar() {
        $this->ligado = true;
        echo "O celular foi ligado <br>";
    }

    function desligar() {
        $this->ligado = false;
        echo "O celular foi desligado <br>";
    }

    function usar($consumo) {
        $this->bateria = $this->bateria - $consumo;

        if ($this->bateria < 0) {
            $this->bateria = 0;
        }

        echo "A bateria foi consumida em $consumo <br>";
        echo "Sobrando um total de $this->bateria <br>";
    }

    function carregar($carga) {
        $this->bateria = $this->bateria + $carga;

        if ($this->bateria > 100) {
            $this->bateria = 100;
        }

        echo "O celular foi carregado. Bateria atual: {$this->bateria}<br>";
    }
}

$celular1 = new Celular();

$celular1->marca = "Motorola";
$celular1->modelo = "G9";
$celular1->cor = "Rosa";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "Marca: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Cor: $celular1->cor <br>";
echo "Bateria: $celular1->bateria <br>";
echo "Ligado: $celular1->ligado <br>";

$celular1->carregar(33);
$celular1->carregar(12);
$celular1->usar(25);

$celular2 = new Celular();

$celular2->marca = "Samsung";
$celular2->modelo = "Galaxy A15";
$celular2->cor = "Azul";
$celular2->bateria = 40;
$celular2->ligado = 2;

echo "Marca: $celular2->marca <br>";
echo "Modelo: $celular2->modelo <br>";
echo "Cor: $celular2->cor <br>";
echo "Bateria: $celular2->bateria <br>";
echo "Ligado: $celular2->ligado <br>";

$celular2->ligar();

$celular2->carregar(30);
$celular2->carregar(15);
$celular2->usar(20);
