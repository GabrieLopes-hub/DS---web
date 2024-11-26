<?php
// Criando o array bidimensional de alunos e suas notas
$alunos = array(
    array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8)
);

// Exibindo o nome de cada aluno e suas notas
foreach ($alunos as $aluno) {
    echo "Aluno: " . $aluno['nome'] . "<br>";
    echo "Nota em Matemática: " . $aluno['matematica'] . "<br>";
    echo "Nota em Português: " . $aluno['portugues'] . "<br>";

    // Calculando a média
    $media = ($aluno['matematica'] + $aluno['portugues']) / 2;
    echo "Média: " . number_format($media, 2, ',', '.') . "<br><br>";
}
?>