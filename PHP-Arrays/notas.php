<?php

$notas = [
    'Ana' => 10,
    'Vinicius' => 6,
    'Maria' => 7,
    'João' => 9,
    'Cléber' => 5
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));
