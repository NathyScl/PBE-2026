<?php

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        if ($percentual > 0 && $percentual <= 10) {
            $total_aumento = $this->salario * ($percentual / 100);
            $this->salario += $total_aumento;
        } else {
            echo "Percentual de aumento incorreto, o valor precisa ser entre 1 e 10.<br>";
        }
    }

    public function exibirSalario() {
        $salarioFormatado = number_format($this->salario, 2, ',', '.');
        echo "Funcionário: {$this->nome} - Salário: R$ {$salarioFormatado}<br>";
    }
}

$f1 = new Funcionario("Carlos", 1500);
$f1->exibirSalario();

$f1->aumentarSalario(5);
$f1->exibirSalario();

?>