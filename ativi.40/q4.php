<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">nome do vendedor</label>
        <input type="text" name="nome" id="nome">

        <label for="sala">Salario:</label>
        <input type="number" name="sala" id="sala">

        <label for="vendas">Vendas</label>
        <input type="number" name="vendas" id="vendas">

        <input type="submit" value="Enviar">
</form>

<?php

$salario = $_GET["sala"];
$vendas = $_GET["vendas"];
$nome = $_GET["nome"];

$resultado = $vendas * 1.5;
$resultado += $salario;

echo "O vendedor de nome $nome recebe um salario de $resultado";

?>

</body>
</html>