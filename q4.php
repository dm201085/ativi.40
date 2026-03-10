<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
Algoritimo "Calculo_Salario"
var 
    nome: Caractere
    salario_fixo, total_vendas, salario_final : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Nome do vendedor: ")
   Leia(nome)
   Escreva("Salário fixo: R$ ")
   Leia(salario_fixo)
   Escreva("Total de vendas no mês: R$ ")
   Leia(total_vendas)

   // Passo 2: O cálculo (15% é o mesmo que 0.15)
   salario_final <- salario_fixo + (total_vendas * 0.15)

   // Passo 3: Saída de dados
   Escreval("--- Resultado ---")
   Escreval("Vendedor: ", nome)
   Escreval("Salário Fixo: R$ ", salario_fixo)
   Escreval("Salário Final (com comissão): R$ ", salario_final)
?>

</body>
</html>