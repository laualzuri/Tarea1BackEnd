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
//1. Crear una variable n y validar que sea un número positivo.
$a=5;
if ($a>0) { 
    echo "a es un numero positivo";
    
}
//2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.

$b=3;
if ($b>1 & $b<10) { 
    echo "<br>";
    echo "a es mayor a 1 y menor a 10";
}

//3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.

$c=12;
if($c>10 || $c<2) 
{   echo"<br>";
    echo "$c es un numero mayor a 10 o menor a 2";
} 

/*4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es 
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, 
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y 
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”*/

$numero1 = 3;
$numero2 = 2;
if ($numero1>$numero2){
     echo "<br>";
    echo "$numero1 + $numero2 =". $numero1 + $numero2 . ".";
   echo "<br>";
    echo "$numero1 - $numero2 =". $numero1 - $numero2 . ".";
} elseif ($numero2>$numero1) {
    echo "<br>";
    echo "$numero1 * $numero2 =". $numero1 * $numero2 . ".";
    echo "<br>";
    echo "$numero1 / $numero2 =". $numero1 / $numero2 . ".";
    echo "<br>";
    echo "$numero1 % $numero2 =". $numero1 % $numero2 . ".";
}
else {
    echo "<br>";
    echo "los numeros ingresados son iguales";
    
}
?>    
</body>
</html>