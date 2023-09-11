<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Ejercicio 1

echo "hola mundo <br><br>";

// Ejercicio 2
$saludo = "hola mundo";
echo "$saludo <br><br>";

//Ejercicio 3

$variable1 = 5;
$variable2 = 10;

//Suma
$totalsuma = $variable1 + $variable2;

echo "Suma: $variable1 + $variable2 = $totalsuma <br><br>";

//Resta
$total = $variable1 - $variable2;

echo "Resta: $variable1 - $variable2 = $total <br><br>";

//Multiplicacion
$total = $variable1 * $variable2;

echo "Multiplicacion: $variable1 * $variable2 = $total <br><br>";

//Division
$total = $variable1 / $variable2;

echo "Division: $variable1 / $variable2 = $total <br><br>";


//Resto

$total = $variable1 % $variable2;

echo "Resto: $variable1 % $variable2 = $total <br><br>";

//Ejercicio 4

$celsius =20;

$total= $celsius * 1.8 + 32;
echo"Conversion: $celsius * 1.8 + 32 = $total <br><br>";

//Ejercicio 5

//A)
$base =18;
$altura =12;

$perimetro = 2 * ($base + $altura);
echo "Perimetro: 2 * ($base + $altura) = $perimetro <br><br>";

$area = $base * $altura;
echo "Area: $base * $altura = $area <br><br>";

//B)
$radio =30;
$perimetro1 =2* 3.14 *$radio;
echo  "Perimetro: 2* 3.14 *$radio =$perimetro1 <br><br>";
$area1 =3.14*$radio **2;
echo "Area: 3.14*$radio **2=$area1";

?>
</body>
</html>