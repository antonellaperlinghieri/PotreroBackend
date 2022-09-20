<?php

$usuario =$_POST["user"];
$contrasenia =$_POST["pass"];

$ckuser = "admin";
$ckpass = "1485";

if (($usuario == $ckuser) && ($contrasenia == $ckpass)) {
    echo "Correcto";
} else {
    echo "Incorrecto";
}


?>
