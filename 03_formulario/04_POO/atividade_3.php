<?php

class Aula {

    public $disciplina;
    public $professor;
    public $duracao;
    public $numeroSala;
    public $bloco;

    public function exibirInformacoes() {
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . " horas<br>";
        echo "Sala: " . $this->numeroSala . "<br>";
        echo "Bloco: " . $this->bloco . "<br><br>";
    } 

  
    public function trocarProfessor($novoProfessor) {
        $this->professor = $novoProfessor;
        echo "Professor alterado para: " . $this->professor . "<br>";
    } 


    public function alterarLocal($n_sala, $bloco) {
        $this->numeroSala = $n_sala;
        $this->bloco = $bloco;

        echo "Local alterado.<br>";
        echo "Nova sala: " . $this->numeroSala . "<br>";
        echo "Novo bloco: " . $this->bloco . "<br>";
    } 

}

$aula1 = new Aula();

$aula1->disciplina = "Programação";
$aula1->professor = "Leonardo";
$aula1->duracao = 4;
$aula1->numeroSala = 12;
$aula1->bloco = "A";

$aula1->exibirInformacoes();
$aula1->trocarProfessor("Carlos");
$aula1->alterarLocal(15, "B");
$aula1->exibirInformacoes();

echo "<hr>";

$aula2 = new Aula();

$aula2->disciplina = "Banco de Dados";
$aula2->professor = "Marcos";
$aula2->duracao = 2;
$aula2->numeroSala = 8;
$aula2->bloco = "C";

$aula2->exibirInformacoes();
$aula2->trocarProfessor("Ana");
$aula2->alterarLocal(10, "D");
$aula2->exibirInformacoes();

?>