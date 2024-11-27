<?php

class Item
{
    private string $nome;
    private int $tamanho;
    private string $categoria;

    public function __construct(string $nome, int $tamanho, string $categoria) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->categoria = $categoria;
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void{
        if ($tamanho > 0) {
            $this->tamanho = $tamanho;
        } else {
            $this->tamanho = 0;
        }
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        if ($nome != '') {
            $this->nome = $nome;
        } else {
            $this->nome = 'Nome não pode estar vazio';
        }
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void {
        if ($categoria != '') {
            $this->categoria = $categoria;
        } else {
            $this->categoria = "Categoria não pode ser vazia.";
        }
    }
}
