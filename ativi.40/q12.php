<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
Algoritmo "Custo_Carro_Novo"
Var
   custo_fabrica, custo_com_imposto, custo_final : real
Inicio
   
   Escreva("Digite o custo de fábrica do veículo: R$ ")
   Leia(custo_fabrica)

 
   custo_com_imposto <- custo_fabrica * 1.45

 
   custo_final <- custo_com_imposto * 1.28
 
  ultado
   Escreval("O custo final ao consumidor é: R$ ", custo_final)
?>

</body>
</html>