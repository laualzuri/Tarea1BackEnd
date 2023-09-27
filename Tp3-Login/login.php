<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "admin";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  header ("location:https://ww1.cuevana3.ch/19738/barbie" );
} else {
    header ("location:error.html" );
}

 ?>
