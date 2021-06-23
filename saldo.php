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


function realizaAcaoDeDepositar(Saldo $pessoa, $valor) 
{
    $pessoa->depositar($valor);
}

$cliente = new Cliente;
realizaAcaoDeDepositar($cliente, 500);

$diarista = new Diarista;
realizaAcaoDeDepositar($diarista, 500);

var_dump($cliente, $diarista);