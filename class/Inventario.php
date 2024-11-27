<?php
require_once 'Itens/Item.php';
require_once 'Itens/Ataque.php';
require_once 'Itens/Defesa.php';
require_once 'Itens/Magia.php';

class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima) {
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        if ($capacidadeMaxima >= 20) {
            $this->capacidadeMaxima = $capacidadeMaxima;
        } else {
            $this->capacidadeMaxima = 20;
        }
    }

    public function adicionar(Item $item): void {
        if ($item->getTamanho() <= $this->capacidadeLivre()) {
            array_push($this->itens, $item);
            echo "Item foi adicionado </br>";
        } else {
            echo "Você não tem espaço suficiente no Inventário </br>";
        }
    }

    public function remover(int $index): void {
        if ($index >= 0 && count($this->itens) > $index) {
            unset($this->itens[$index]);
            echo "Item retirado com sucesso do Inventário </br>";
        } else {
            echo "Item não foi encontrado </br>";
        }
    }

    public function listar(): void {
        foreach ($this->itens as $item) {
            echo "{$item->getNome()} </br>";
        }
    }

    public function capacidadeLivre(): float {
        $peso = 0;
        foreach ($this->itens as $item) {
            $peso += $item->getTamanho();
        }
        return $this->getCapacidadeMaxima() - $peso;
    }
}
?>
