<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Simulando um array com 80 números aleatórios entre 1 e 300
$numeros = [];
for ($i = 0; $i < 80; $i++) {
    $numeros[] = rand(1, 300);
}

// Variável contador
$quantidadeNoIntervalo = 0;

// Percorrendo os 80 números
foreach ($numeros as $n) {
    // Verificando o intervalo entre 10 e 150 (inclusive)
    if ($n >= 10 && $n <= 150) {
        $quantidadeNoIntervalo++;
    }
}

echo "Total de números no intervalo [10, 150]: " . $quantidadeNoIntervalo;
?>

</body>
</html>