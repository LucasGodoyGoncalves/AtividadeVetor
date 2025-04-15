<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatório</title>

<?php
$rand = rand(0, 99);
echo "Número aleatório de 0 a 99: $rand";
?>

</head>
<body>
<form action="calcular.php" method="post">
<input type="submit" value="Sortear">

</body>
</html>