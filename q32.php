<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Entrada de dados (Exemplos)
$A = 10.5;
$B = 0;
$C = '/'; // O operador desejado (+, -, *, /)

switch ($C) {
    case '+':
        $resultado = $A + $B;
        echo "Resultado: $resultado";
        break;

    case '-':
        $resultado = $A - $B;
        echo "Resultado: $resultado";
        break;

    case '*':
        $resultado = $A * $B;
        echo "Resultado: $resultado";
        break;

    case '/':
        // Tratamento de erro de divisão por zero
        if ($B == 0) {
            echo "Erro: Divisão por zero não é permitida.";
        } else {
            $resultado = $A / $B;
            echo "Resultado: $resultado";
        }
        break;

    default:
        // Caso o caractere C não seja um dos operadores acima
        echo "Operador não definido.";
        break;
}
?>

</body>
</html>