<?php
include "Persona.php";

$nombre = "maria";
$apellido ="klimisch";
$tipo = "DNI";
$numerodni= "34403361";
$personita = new Persona ($nombre,$apellido,$tipo,$numerodni);
echo $personita;