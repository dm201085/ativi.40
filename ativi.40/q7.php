<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q7.php" method="get">
      <label for="tem">Digite a temperatura em c:</label>
      <input type="number" name="tem" id="tem">
      <input type="submit" value="Enviar">
    </form>

   <?php

   $tem = $_GET["tem"];
   $resultado = $tem * 1.8 + 32;
   echo "A temperatura é: " . $resultado;
   

   ?>


</body>
</html>