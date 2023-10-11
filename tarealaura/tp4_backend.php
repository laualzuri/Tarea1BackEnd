!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3_backend</title>
</head>

<body>
    <?php
    print "<p>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>";
    $numerospares = [2, 4, 6, 8, 10];
    print "<pre>\n";
    print_r($numerospares);
    print "</pre>\n";
    foreach ($numerospares as $valor) {
        print "<p>$valor</p>";
    }

    
    print "<p>2-Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
                matriz. Mostrar el esquema del array con print_r().</p>";

    $valores = ["Pedro", "Ana", 34, 1];
    print_r($valores);



    print "3-Crear un array asociativo e introducir los siguientes valores:
   Nombre: Pedro 
   Apellido: Torres
   Dirección: Av. Mayor 3703
   Teléfono: 1122334455";

    $datos = [
        "Nombre" => "Pedro",
        "Apellido" => "Torres",
        "Direccion" => "Av. Mayor 3703",
        "Telefono" => 1122334455,
    ];



    print "4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
   Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
   Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago",];
    print "<pre>\n";
    print_r($ciudades);
    print "</pre>\n";
    foreach ($ciudades as $ciudad) {
        print "<p>La ciudad con el índice 0 tiene el nombre $ciudad .</p>";
    }

    print "5- Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
   LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
   Ejemplo: El índice de Madrid es MD. ";
    $ciudades = [
        "MD" => "Madrid",
        "BCL" => "Barcelona",
        "LD" => "Londres",
        "NY" => "New York",
        "LA" => "Los Angeles",
        "CCG" => "Chicago",
    ];
    print "<pre>\n";
    print_r($ciudades);
    print "</pre>\n";
    foreach ($ciudades as $indice => $ciudad) {
        print "<p> El índice de $ciudad es $indice.</p>";
    }

    ?>
</body>

</html>