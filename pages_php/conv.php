<?php 
$money = filter_input(INPUT_GET, "money", FILTER_VALIDATE_FLOAT);
$currency = filter_input(INPUT_GET, "currency", FILTER_SANITIZE_STRING);
$result = "";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESULTADO DA CONVERSÃO</title>
    <link rel="stylesheet" href="./../css/style.css" />
</head>
<body>
    <div id="result">
        <h1>O resultado da conversão é:</h1>
        <p><?= ?></p>
    </div>
</body>
</html>