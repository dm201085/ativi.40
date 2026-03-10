<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Pergunta quantos números o usuário deseja digitar
echo "Quantos números você deseja testar? ";
$n = trim(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    echo "Digite o $i º número: ";
    $numero = trim(fgets(STDIN));

    // Lógica de verificação
    if ($numero > 0) {
        echo "Resultado: POSITIVO\n";
    } elseif ($numero < 0) {
        echo "Resultado: NEGATIVO\n";
    } else {
        echo "Resultado: ZERO\n";
    }
}
?>

</body>
</html>