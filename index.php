<?php
require_once 'class/Player.php';
require_once 'class/Inventario.php';
require_once 'class/Itens/Ataque.php';
require_once 'class/Itens/Defesa.php';
require_once 'class/Itens/Magia.php';

$player1 = new Player("Castro", 1);
$player2 = new Player("Gustavo", 1);

$ataque1 = new Ataque("Espada");
$ataque2 = new Ataque("Machado");
$defesa1 = new Defesa("Escudo");
$defesa2 = new Defesa("Armadura");
$magia1 = new Magia("Poção");
$magia2 = new Magia("Grimório");

$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player2->coletarItem($ataque2);
$player2->coletarItem($magia1);

echo "</br>";
echo "--------------------------------------------------";

echo "</br>";
$player1->coletarItem(new Ataque("Martelo")); // Adiciona o item no inventario
echo "</br>";
$player1->soltarItem(0); // Remove o item 0 - Espada.

echo "</br>";
echo "{$player1->getNickname()} - Inventário após remoção:";
$player1->listarItens();


echo "--------------------------------------------------";

echo "</br>";
$player1->subirNivel();
echo "</br>";
$player1->subirNivel();


echo "--------------------------------------------------";

echo "</br>";
echo $player1->getNickname() . " - Itens no inventário após subida de nível: </br>";
$player1->listarItens();

echo "</br>";

echo $player2->getNickname() . " - Itens no inventário após subida de nível: </br>";
$player2->listarItens();

echo "--------------------------------------------------";
