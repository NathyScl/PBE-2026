<?php

class Aluno {

    public $Nome;
    public $Nota1;
    public $Nota2;
    public $média;

    public function _construct($nome, $nota1, $nota2 ) {

    $this->nome = $nome;
    $this->preco = $nota1;
    $this->descricao = $nota2;

    public function calcularMédia() {
        return ($this->nota1 + $this->nota2)/2;
        
        }

    }