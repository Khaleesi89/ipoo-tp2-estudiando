<?php
include "Persona.php";
include "Disquera.php";

$horaApertura = "10:40";
$horaCierre = "18:30";
$estado = "abierto";
$direccion = "san luis 33";

$nombreOwner = "Luis";
$apellidoOwner = "kalauz";
$tipId = "dni";
$numerId = "3443222";
$objDuenio = new Persona($nombreOwner,$apellidoOwner,$tipId,$numerId);
$objDiskera = new Disquera ($horaApertura,$horaCierre,$estado,$direccion,$objDuenio);

echo $objDiskera;
echo "ponga la hora a verificar: \n";
$horitas= trim(fgets(STDIN));
echo "ponga el minuto a verificar: \n";
$minutitos= trim(fgets(STDIN));
echo "estas dentro del horario? \n";

$horarioVerificar = $objDiskera->dentroHorarioAtencion($horitas,$minutitos);
if($horarioVerificar){
    echo "Está en horario de atencion \n";

}else{
    echo "No esta en horario de atencion \n";
}

echo "corresponde abrir la disquera? \n";
$siCorresponde = $objDiskera->abrirDisquera($horitas,$minutitos);
echo $objDiskera;

