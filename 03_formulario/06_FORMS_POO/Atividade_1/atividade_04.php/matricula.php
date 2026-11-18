<?php

class Matricula {

    private $aluno;       
    private $plano;     
    private $meses;       
    private $modalidades; 

    public function __construct($aluno, $plano, $meses, $modalidades) {
        $this->aluno = $aluno;
        $this->plano = $plano;
        $this->meses = $meses;
        $this->modalidades = $modalidades;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function getMeses() {
        return $this->meses;
    }

    public function getModalidades() {
        return $this->modalidades;
    }

    public function calcularValorPlano() {
        if ($this->plano == "Básico") {
            return 80;
        } elseif ($this->plano == "Plus") {
            return 120;
        } else {
            return 180;
        }
    }

    public function calcularValorModalidade($modalidade) {
        if ($modalidade == "Natação") {
            return 60;
        } elseif ($modalidade == 'Funcional') {
            return 40;
        }else{
            return 50;
        }
    }

    public function calcularMensalidade() {
        $totalMensal = $this->calcularValorPlano();

        foreach ($this->modalidades as $mod) {
            $totalMensal += $this->calcularValorModalidade($mod);
        }

        return $totalMensal;
    }

    public function calcularPercentualDesconto() {
        if ($this->meses == 12){
            return 20;
        } elseif ($this->meses >= 6){
            return 10;
        } else {
            return 0;
        }
    }

    public function calcularSubtotal() {
        return $this->calcularMensalidade() * $this->meses;
    }

    public function calcularDesconto() {
        return $this->calcularSubtotal() * ($this->calcularPercentualDesconto()/100);
    }

    public function calcularTotal() {
        return $this->calcularSubtotal() - $this->calcularDesconto();
    }
}