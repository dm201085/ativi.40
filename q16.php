<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Entrada de dados
$nome = "João Silva";
$nota1 = 8.5;
$nota2 = 6.0;
$nota3 = 7.5;

// Cálculo da média aritmética
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibição dos resultados formatados
echo "Aluno: $nome <br>";
echo "Média: " . number_format($media, 1) . "<br>";

// Estrutura de decisão para a menção
if ($media >= 7) {
    echo "Menção: **APROVADO**";
} elseif ($media <= 5) {
    echo "Menção: **REPROVADO**";
} else {
    // Se não é >= 7 nem <= 5, só pode estar entre 5.1 e 6.9
    echo "Menção: **RECUPERAÇÃO**";
}
?>

</body>
</html>