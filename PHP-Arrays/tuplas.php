<?php

$dados = [
    'nome' => 'Samuel',
    'nota' => 10,
    'idade' => 18
];
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));
