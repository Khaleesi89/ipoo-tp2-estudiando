<?php

class Tramite{
    private $horarioCreacion;
    private $horarioResolucion;


    public function __construct($creacion, $resolucion){
        $this->horarioCreacion = $creacion;
        $this->horarioResolucion = $resolucion;

    }
    
    

    public function getHorarioCreacion(){
        return $this->horarioCreacion;
    }

    public function setHorarioCreacion($creacion){
        $this->horarioCreacion = $creacion;
    }

    public function getHorarioResolucion(){
        return $this->horarioResolucion;
    }

    public function setHorarioResolucion($resolucion){
        $this->horarioResolucion = $resolucion;
    }

    public function __toString(){
        $info="
        HORARIO DE CREACION: {$this->getHorarioCreacion()}
        HORARIO DE RESOLUCION: {$this->getHorarioResolucion()}
        ";
        return $info;
        
    }
}