<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// O número que queremos testar (pode vir de um formulário ou variável)
$numero = 150;

// Verificação usando o operador lógico && (E)
if ($numero >= 100 && $numero <= 200) {
    echo "O número $numero está no intervalo entre 100 e 200.";
} else {
    echo "O número $numero NÃO está no intervalo.";
}
?>

</body>
</html>