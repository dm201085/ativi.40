<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// 1. Recebendo os valores (podem ser alterados para teste)
$v1 = 45;
$v2 = 12;
$v3 = 30;

// 2. Colocando os valores dentro de um Array (vetor)
$valores = [$v1, $v2, $v3];

// 3. Ordenando o array em ordem crescente
sort($valores);

// 4. Exibindo os valores já ordenados
echo "Os valores em ordem crescente são: " . $valores[0] . ", " . $valores[1] . " e " . $valores[2];
?>

</body>
</html>