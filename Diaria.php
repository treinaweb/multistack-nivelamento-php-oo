<?php

class Atendimento
{
    public $data;
    private $tempo;
    protected $valor;

    public function definirTempo($tempo)
    {
        if ($tempo < 1) {
            echo "não pode adicionar um tempo menor do que 1";
            return;
        }

        $this->tempo = $tempo;
    }
}

class Diaria extends Atendimento
{
    public function definirValor($valor)
    {
        $this->valor = $valor;
    }
}

$d1 = new Diaria;
$d1->definirValor(100.00);
$d1->data = '01/10/2021';
echo $d1->data;

var_dump($d1);

// $at1 = new Atendimento;
// $at1->data = '01/10/2021';
// $at1->definirTempo(0);

