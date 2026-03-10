<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Exemplo de dados (Nome e Sexo: M para Masculino, F para Feminino)
$pessoas = [
    ["nome" => "Ana", "sexo" => "F"],
    ["nome" => "Bruno", "sexo" => "M"],
    // ... imagine aqui os 56 registros
];

$totalHomens = 0;
$totalMulheres = 0;

foreach ($pessoas as $pessoa) {
    $nome = $pessoa['nome'];
    $sexo = strtoupper($pessoa['sexo']); // Garante que seja maiúsculo

    if ($sexo == "M") {
        echo "Nome: $nome - Sexo: Homem <br>";
        $totalHomens++;
    } elseif ($sexo == "F") {
        echo "Nome: $nome - Sexo: Mulher <br>";
        $totalMulheres++;
    } else {
        echo "Nome: $nome - Sexo: Não informado/Outro <br>";
    }
}

echo "---<br>";
echo "Total de Homens: $totalHomens <br>";
echo "Total de Mulheres: $totalMulheres <br>";
?>

</body>
</html>