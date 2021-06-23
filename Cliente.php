<?php

class Cliente
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return 'Nome do cliente: ' . $this->nome;
    }

    public function __invoke()
    {
        return 'Chamou como uma função';
    }
}

$cli1 = new Cliente('Elton');
echo $cli1();