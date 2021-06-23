<?php

interface Saldo
{
    public function depositar($valor);
    public function sacar($valor);
}

class Cliente implements Saldo 
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + ($valor * 1.1);
    }


    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }
}

class Diarista implements Saldo 
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }


    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }
}

$cliente = new Cliente;
$cliente->depositar(100);

var_dump($cliente);

$cliente->sacar(10);
var_dump($cliente);