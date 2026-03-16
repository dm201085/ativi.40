<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">nome</label>
        <input type="text" name="nota" id="nota">

        <label for="n1">nota 1</label>
        <input type="number" name="n1" id="n1">
        <label for="n2">nota 2</label>
        <input type="number" name="n2" id="n2">
        <label for="n3">nota 3</label>
        <input type="number" name="n3" id="n3">

        <input type="submit" value="Enviar">
</form>
    
<?php
$nome = $_GET["nome"];
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];

$media = $n1 + $n2 + $n3 / 3;

echo "O aluno de nome $nome tem média de $media";


?>


</body>
</html>