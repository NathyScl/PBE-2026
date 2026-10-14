<?php

class Livro {
    public $titulo;
    public $autor;
    public $paginas;
    public $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $anoPublicacao = "Desconhecido") {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes() {
        echo "Título: " . $this->titulo . 
             ", Autor: " . $this->autor . 
             ", Páginas: " . $this->paginas . 
             ". Publicado em: " . $this->anoPublicacao . "<br>";
    }
}
$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899);
$livro2 = new Livro("O Alquimista", "Paulo Coelho", 208);

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();

?>