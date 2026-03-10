<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$distancia = $_GET['n1'] ?? 0;
$combustivel = $_GET['n2'] ?? 0;

echo "O consumo médio é: ";
echo $distancia / $combustivel;
?>

</body>
</html>