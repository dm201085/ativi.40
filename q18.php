<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Simulando um array com 75 idades aleatórias (entre 1 e 90 anos)
$idades = [];
for ($i = 0; $i < 75; $i++) {
    $ids[] = rand(1, 90);
}

// Percorrendo cada idade para verificar a maioridade
foreach ($ids as $indice => $idade) {
    $pessoaNumero = $indice + 1;
    
    if ($idade >= 18) {
        echo "Pessoa $pessoaNumero: $idade anos - **MAIOR DE IDADE**<br>";
    } else {
        echo "Pessoa $pessoaNumero: $idade anos - **MENOR DE IDADE**<br>";
    }
}
?>

</body>
</html>