<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<?php
$totalCusto = 0;
$totalVenda = 0;
$quantidade = 40;

for ($i = 1; $i <= $quantidade; $i++) {
    echo "\n--- Produto $i ---\n";
    $custo = (float)readline("Preço de custo: ");
    $venda = (float)readline("Preço de venda: ");

    // Acumula os valores para a média posterior
    $totalCusto += $custo;
    $totalVenda += $venda;

    // Verifica lucro, prejuízo ou empate
    if ($venda > $custo) {
        echo "Resultado: LUCRO\n";
    } elseif ($venda < $custo) {
        echo "Resultado: PREJUÍZO\n";
    } else {
        echo "Resultado: EMPATE\n";
    }
}

// Cálculo das médias
$mediaCusto = $totalCusto / $quantidade;
$mediaVenda = $totalVenda / $quantidade;

echo "\n=====================================";
echo "\nMédia de Preço de Custo: R$ " . number_format($mediaCusto, 2, ',', '.');
echo "\nMédia de Preço de Venda: R$ " . number_format($mediaVenda, 2, ',', '.');
echo "\n=====================================\n";
?>

</body>
</html>