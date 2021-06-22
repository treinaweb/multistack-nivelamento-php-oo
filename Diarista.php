<?php

class Diarista 
{
    public $nome;
    public $telefone;
    public $endereco;

    public function atenderCliente($nomeCliente)
    {
        echo "<br> O(A) diarista atendeu ao cliente $nomeCliente";
    }
}

$maria = new Diarista;
$maria->nome = "Maria da Silva";
$maria->telefone = "(11) 98777 7777";
$maria->endereco = "Av Paulissta, 1220";
$maria->atenderCliente('Elton');

var_dump($maria);

$joao = new Diarista;
$joao->nome = "joao da Silva";
$joao->telefone = "(11) 98777 1234";
$joao->endereco = "Av Paulissta, 1233";
$joao->atenderCliente('Luciane');

var_dump($joao);