<?php

class Pessoa 
{
    public $nome;
    public $telefone;
    public $endereco;

    //....
}

class Cliente extends Pessoa
{
    public $saldo;

    public function contratarDiarista($diarista)
    {
        # processo para contratar diarista
    }
}

class Diarista extends Pessoa
{
    public $chavePix;

    /**
     * Atende ao cliente
     *
     * @param string $nomeCliente
     * @return void
     */
    public function atenderCliente($nomeCliente)
    {
        $nomeDiarista = $this->nome;
        echo "<br> O(A) diarista $nomeDiarista atendeu ao cliente $nomeCliente. ";
    }

    /**
     * Avalia cliente
     *
     * @param string $nomeCliente
     * @param int $nota
     * @return void
     */
    public function avaliarCliente($nomeCliente, $nota)
    {
        $this->atenderCliente($nomeCliente);
        echo "Avaliou o cliente com a nota $nota";
    }
}

$maria = new Diarista;
$maria->nome = "Maria da Silva";
$maria->telefone = "(11) 98777 7777";
$maria->endereco = "Av Paulissta, 1220";
$maria->avaliarCliente('Elton', 5);

var_dump($maria);

$joao = new Diarista;
$joao->nome = "joao da Silva";
$joao->telefone = "(11) 98777 1234";
$joao->endereco = "Av Paulissta, 1233";
$joao->avaliarCliente('Luciane', 4);

var_dump($joao);