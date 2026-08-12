<?php

$alunos = [
    ['nome' => 'Ana', 'nota' => 8.5],
    ['nome' => 'Bruno', 'nota' => 7.0],
    ['nome' => 'Carlos', 'nota' => 9.2],
    ['nome' => 'Diana', 'nota' => 6.8],
    ['nome' => 'Eduardo', 'nota' => 8.0]
];

$totalNotas = 0;

foreach ($alunos as $aluno) {
    echo "O aluno <b>" . $aluno['nome'] . "</b> tirou nota <b>" . $aluno['nota'] . "</b><br>";
    $totalNotas += $aluno['nota'];
}

$media = $totalNotas / count($alunos);

echo "<hr>";
echo "A média da turma é <b>$media</b>";
