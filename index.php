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


<!-- 1 -->
<?php 
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;

echo $n1 + $n2;
?>



<!-- 2 -->
<?php
echo "<br>";
echo $n1 - $n2; 
echo "<br>";
echo $n1 * $n2;
echo "<br>";
echo $n1 / $n2;
?>



<!-- 3 -->
<?php 
$distancia = $_GET['n1'] ?? 0;
$combustivel = $_GET['n2'] ?? 0;

echo "O consumo médio é: ";
echo $distancia / $combustivel;
?>



<!-- 4 -->
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



<!-- 5 -->
<?php
Algoritimo "Media_aluno"
var
    nome: Caractere
    n1, n2, n3, media : real
Inicio
    // Passo 1: Entrada de dados
    Escreva("nome do aluno: ")
    leia(nome)
    Escreva("digite a primeira nota: ")
    Leia(n1)
    Escreva("Digite a sengunda nota: ")
    Leia(n2)
    Escreva("Digite a terceira nota: ")
    Leia(n3)

    // Passo 2: Cálculo da média aritmética
   media <- (n1 + n2 + n3) / 3

   // Passo 3: Saída de dados
    Ecreval("---Boletim---")
    Escreval("Aluno: ", nome )  
    Escreval("Média Final: ", media)
?>



<!-- 6 -->
<?php
Algoritmo "Troca_Valores"
Var
   A, B, Aux : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite o valor de A: ")
   Leia(A)
   Escreva("Digite o valor de B: ")
   Leia(B)

   // Passo 2: A "Dança das Cadeiras"
   Aux <- A  // O Auxiliar guarda o valor de A
   A <- B    // A recebe o valor de B (o valor antigo de A sumiria aqui se não estivesse no Aux)
   B <- Aux  // B recebe o valor que estava guardado no Auxiliar

   // Passo 3: Resultado
   Escreval("Agora A vale: ", A)
   Escreval("Agora B vale: ", B)
?>



<!-- 7 -->
<?php
Algoritmo "Conversor_Celsius_Fahrenheit"
Var
   C, F : real
Inicio
   // Passo 1: Entrada do valor em Celsius
   Escreva("Digite a temperatura em Celsius (°C): ")
   Leia(C)

   // Passo 2: Aplicação da fórmula
   F <- (C * 1.8) + 32

   // Passo 3: Exibição do resultado
   Escreval("A temperatura em Fahrenheit é: ", F, "°F")
?>



<!-- 8 -->
<?php
Algoritmo "Conversor_Moeda"
Var
   cotacao, qtd_dolar, valor_real : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite a cotação do dólar hoje: ")
   Leia(cotacao)
   Escreva("Quantos dólares você tem (US$): ")
   Leia(qtd_dolar)

   // Passo 2: Cálculo da conversão
   valor_real <- qtd_dolar * cotacao

   // Passo 3: Exibição do resultado
   Escreval("O valor em moeda brasileira é: R$ ", valor_real)
?>



<!-- 9 -->
<?php
Algoritmo "Rendimento_Poupanca"
Var
   valor_deposito, valor_final : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite o valor depositado: R$ ")
   Leia(valor_deposito)

   // Passo 2: Cálculo do rendimento (0,70% é o mesmo que 0,007)
   // Valor Final = Valor Inicial + (Valor Inicial * 0.007)
   valor_final <- valor_deposito * 1.007

   // Passo 3: Exibição do resultado
   Escreval("Após um mês, o valor com rendimento é: R$ ", valor_final)
?>



<!-- 10 -->
<?php
Algoritmo "Loja_Mamao_Com_Acucar"
Var
   valor_compra, valor_prestacao : real
Inicio
   // Passo 1: Entrada do valor total
   Escreva("Digite o valor total da compra: R$ ")
   Leia(valor_compra)

   // Passo 2: Cálculo da prestação (divisão simples por 5)
   valor_prestacao <- valor_compra / 5

   // Passo 3: Exibição do resultado
   Escreval("O valor de cada prestação (em 5x sem juros) é: R$ ", valor_prestacao)
?>



<!-- 11 -->
<?php
Algoritmo "Valor_Venda_Produto"
Var
   custo, percentual, venda : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite o preço de custo do produto: R$ ")
   Leia(custo)
   Escreva("Digite o percentual de acréscimo (ex: 25 para 25%): ")
   Leia(percentual)

   // Passo 2: Cálculo do valor de venda
   // O cálculo é: Custo + (Custo * Percentual / 100)
   venda <- custo + (custo * (percentual / 100))

   // Passo 3: Exibição do resultado
   Escreval("O valor de venda do produto é: R$ ", venda)
?>



<!-- 12 -->
<?php
Algoritmo "Custo_Carro_Novo"
Var
   custo_fabrica, custo_com_imposto, custo_final : real
Inicio
   // Passo 1: Entrada do custo inicial
   Escreva("Digite o custo de fábrica do veículo: R$ ")
   Leia(custo_fabrica)

   // Passo 2: Aplicar 45% de impostos sobre o custo de fábrica
   custo_com_imposto <- custo_fabrica * 1.45

   // Passo 3: Aplicar 28% do distribuidor sobre o valor já com imposto
   custo_final <- custo_com_imposto * 1.28

   // Passo 4: Exibir o resultado
   Escreval("O custo final ao consumidor é: R$ ", custo_final)
?>



<?php
Algoritmo "Verifica_Numero"
Var
   numero : real
Inicio
   // Passo 1: Ler o número
   Escreva("Digite um número: ")
   Leia(numero)

   // Passo 2: Condição (Se)
   Se (numero > 10) Entao
      Escreva("O número é maior que 10!")
   FimSe
?>
</body>
</html>