<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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


</body>
</html>