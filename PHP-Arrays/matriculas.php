<?php

$alunos2021 = [
    'Ana',
    'Vinicius',
    'Maria',
    'João',
    'Cléber'
];

$novosAlunos = [
    'Nico',
    'Igor',
    'Enrico',
    'Paul'
];

$alunos2022 = [...$alunos2021, 'Samuel', ...$novosAlunos];
array_push($alunos2022, 'Sergio', 'Helena');
$alunos2022[] = 'Laura';

array_unshift($alunos2022, 'Lucas', 'Marcelo');
echo array_shift($alunos2022) . PHP_EOL;
echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);
