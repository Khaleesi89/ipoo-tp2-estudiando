<?php

class Disquera{
    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $Dueño;

    public function __construct($desde, $hasta,$state, $address,$owner){
        $this->hora_desde = $desde;
        $this->hora_hasta = $hasta;
        $this->estado = $state;
        $this->direccion = $address;
        $this->Dueño = $owner;
    }
    
    public function getHora_desde(){
        return $this->hora_desde;
    }

    public function setHora_desde($desde){
        $this->hora_desde = $desde;
    }

    public function getHora_hasta(){
        return $this->hora_hasta;
    }

    public function setHora_hasta($hasta){
        $this->hora_hasta = $hasta;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($state){
        $this->estado = $state;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($address){
        $this->direccion = $address;
    }

    public function getDueño(){
        return $this->Dueño;
    }

    public function setDueño($owner){
        $this->Dueño = $owner;
    }

    public function __toString(){
        
        $info = "
        HORARIO DESDE: {$this->getHora_desde()}
        HORARIO HASTA: {$this->getHora_hasta()}
        ESTADO: {$this->getEstado()}
        DIRECCION: {$this->getDireccion()}
        DUEÑO: {$this->getDueño()}
        ";
        return $info;
    }


    //que dada una hora y minutos retorna true si la tienda debe encontrarse abierta en ese horario y
    // false en caso contrario.
    
    public function dentroHorarioAtencion($hora, $min){
        //convertir en array la hora de apertura
        $arrayStrHour = $this->getHora_desde();
        $arrayHorarioAtencion = explode(":",$arrayStrHour);
        $hour = $arrayHorarioAtencion[0];
        $minute = $arrayHorarioAtencion[1];
        //convertir en array la hora de cierre
        $arrayStrHour2 = $this->getHora_hasta();
        $arrayHorarioCierre = explode(":",$arrayStrHour2);
        $hour2 = $arrayHorarioCierre[0];
        $minute2 = $arrayHorarioCierre[1];
        $bandera = false;
        if ($hora >= $hour && $hora <= $hour2){
            if($min <= $minute2 || $min < $minute){ 
                $bandera = true;
            }
        }
        return $bandera;
        
    }


    //que dada una hora y minutos corrobora que se encuentra dentro del horario de atención 
    //y cambia el estado de la disquera solo si es un horario válido para su apertura.


    public function abrirDisquera($hora,$minutos){
        $cambioEstado = $this->dentroHorarioAtencion($hora,$minutos);
        if($cambioEstado){
            $this->setEstado("Abierto");
        }else{
            $this->setEstado("Cerrado");
        }
    }



    //que dada una hora y minutos corrobora que se encuentra fuera del horario de atención y 
    //cambia el estado de la disquera solo si es un horario válido para su cierre.

    /*public function abrirDisquera($hora,$minutos){
    }*/

}