<form action="" method="GET">
    <label for="num">Digite um numero:</label>
    <input name="num" id="num" type="text">

    <button type="submit">ENVIAR</button>

</form>


<?php
$raio = $_GET['num'];
$area = 2 * M_PI * pow($raio, 2);

echo "<p> o raio informado é: " . number_format($raio, 2) . "</p>";
echo "<p> a area informada é: " . number_format($area, 2) . "</p>";

echo " <br>Modulo: " . abs($raio) . "<br>";
echo "Potencia: " . pow($raio, 4) . "<br>";
echo "Raiz Quadrada: " . sqrt($raio) . "<br>";

echo "Arredonda normal: " . round($raio) . "<br>";
echo "Parte inteira:" . intval($raio) . "<br>";


echo "<h3> mini matematica </h3>";
$a = 4;
$b = 5;
$c = $a + $b;

$c = $c + 5;

$b = $b + $a;
$b += $b;


$var = "janela";
$$var = 10;

echo "<p> variavel:" . $var . "<br>";
echo " variavel: " . $janela . "<br>";
echo "variavel 3.0: " . $var . "<br>";

$ $$var = 20;
echo "variavel: " . $var . "<br>";

$ $ $$var = 30;
echo "variavel 4.0 " . $janela . "<br>";