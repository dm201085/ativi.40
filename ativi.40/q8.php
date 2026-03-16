<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Primeiro número</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Segundo número</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" value="Enviar">
</form>

<?php
Algoritmo "Conversor_Moeda"
Var
   cotacao, qtd_dolar, valor_real : real
Inicio
   
   Escreva("Digite a cotação do dólar hoje: ")
   Leia(cotacao)
   Escreva("Quantos dólares você tem (US$): ")
   Leia(qtd_dolar)

   valor_real <- qtd_dolar * cotacao

   Escreval("O valor em moeda brasileira é: R$ ", valor_real)
?>

</body>
</html>