<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Definimos quantas pessoas vamos ler
$n = (int)readline("Quantas pessoas deseja avaliar? ");

$totalAptos = 0;
$totalInaptos = 0;

for ($i = 1; $i <= $n; $i++) {
    echo "\n--- Dados da $i ª pessoa ---\n";
    $nome  = readline("Nome: ");
    $sexo  = strtoupper(readline("Sexo (M/F): "));
    $idade = (int)readline("Idade: ");
    $saude = strtoupper(readline("Saúde (Boa/Ruim): "));

    // Critério: Masculino, maior ou igual a 18 anos e saúde boa
    if ($sexo == 'M' && $idade >= 18 && $saude == 'BOA') {
        echo "Resultado: $nome está APTO.\n";
        $totalAptos++;
    } else {
        echo "Resultado: $nome está INAPTO.\n";
        $totalInaptos++;
    }
}

// Exibição dos totais
echo "\n==============================\n";
echo "Total de pessoas aptas: $totalAptos\n";
echo "Total de pessoas inaptas: $totalInaptos\n";
echo "==============================\n";
?>

</body>
</html>