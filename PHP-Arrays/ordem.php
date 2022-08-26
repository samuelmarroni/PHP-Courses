<?php

$notas = [
    [
        'aluno' => 'Enrico',
        'nota' => 8,
    ],
    [
        'aluno' => 'Samuel',
        'nota' => 10,
    ],
    [
        'aluno' => 'Victor',
        'nota' => 6,
    ]
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);
