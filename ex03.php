<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="genero">Digite o genero</label>
        <input name="genero" type="text">

        <button type="submit">ENVIAR</button>

    </form>
</body>

<?php
$genero = strtoupper($_GET['genero']);
echo "O genero digitado foi: " . $genero;

if ($genero == 'M' || $genero == 'm') {
    echo "<br>Voce e masculino.<br>";
} else {
    echo "<br>Voce e feminimo <br>";
}
?>

</html>