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
Algoritmo "Rendimento_Poupanca"
Var
   valor_deposito, valor_final : real
Inicio
   Escreva("Digite o valor depositado: R$ ")
   Leia(valor_deposito)

   
   valor_final <- valor_deposito * 1.007


   Escreval("Após um mês, o valor com rendimento é: R$ ", valor_final)
?>


</body>
</html>