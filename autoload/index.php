<?php

function carregarArquivos($nomeDaClasse)
{
    require_once($nomeDaClasse . '.php');
}

spl_autoload_register('carregarArquivos');

$maria = new Diarista;
$pag = new Pagamento;

var_dump($maria, $pag);