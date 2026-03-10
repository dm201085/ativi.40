<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// O número que será testado
$numero = 40; 

// Verificação das três condições:
// > 80 (Maior que 80)
// < 25 (Menor que 25)
// == 40 (Igual a 40)
if ($numero > 80 || $numero < 25 || $numero == 40) {
    echo "O número $numero atende aos critérios (maior que 80, menor que 25 ou igual a 40).";
} else {
    echo "O número $numero não atende aos critérios.";
}
?>

</body>
</html>