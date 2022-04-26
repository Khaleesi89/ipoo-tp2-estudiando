<?php
include "Persona.php";
include "Disquera.php";

$horaApertura = "10:00";
$horaCierre = "18:30";
$estado = "abierto";
$direccion = "san luis 33";

$nombreOwner = "Luis";
$apellidoOwner = "kalauz";
$tipId = "dni";
$numerId = "3443222";
$objDuenio = new Persona($nombreOwner,$apellidoOwner,$tipId,$numerId);
$objDiskera = new Disquera ($horaApertura,$horaCierre,$estado,$direccion,$objDuenio);
