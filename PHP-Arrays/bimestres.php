<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Vinicius' => 6,
    'Maria' => 7,
    'João' => 9,
    'Cléber' => 5
];

$notasBimestre2 = [
    'Ana' => 9,
    'João' => 8,
    'Cléber' => 5
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));
