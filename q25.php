<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Definindo dois números para testar
$n1 = 15;
$n2 = 30;

if ($n1 == $n2) {
    // Caso sejam iguais
    echo "Os números são iguais.";
} else {
    // Caso sejam diferentes
    echo "Os números são diferentes. <br>";

    if ($n1 > $n2) {
        echo "O primeiro número ($n1) é o maior.";
    } else {
        echo "O segundo número ($n2) é o maior.";
    }
}
?> 
</body>
</html>