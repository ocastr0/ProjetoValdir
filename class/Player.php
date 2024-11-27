<?php
require_once 'Inventario.php';

class Player {
    private string $nickname;
    private int $nivel = 1;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel = 1){
        $this->setNickname($nickname);
        $this->setNivel($nivel);
        $this->inventario = new Inventario(20);
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void {
        if ($nickname != '') {
            $this->nickname = $nickname;
        } else {
            $this->nickname = 'Sem Nome';
        }
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel >= 1) {
            $this->nivel = $nivel;
        } else {
            $this->nivel = 1;
        }
    }

    public function coletarItem(Item $item): void {
        echo "Item coletado </br>";
        $this->inventario->adicionar($item);
    }

    public function soltarItem(int $index): void {
        $this->inventario->remover($index);
        echo "Item soltado </br>";
    }

    public function listarItens(): void {
        $this->inventario->listar();
    }

    public function subirNivel(): void {
        $this->nivel += 1;
        $this->inventario->setCapacidadeMaxima($this->inventario->getCapacidadeMaxima() + ($this->nivel * 3));

        echo "Parabéns você subiu para o nível {$this->nivel} </br>";
        echo "Sua capacidade máxima agora é {$this->inventario->getCapacidadeMaxima()} </br>";
    }
}
?>
