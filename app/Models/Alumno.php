<?php

namespace App\Models;

class Alumno
{
    private int $id = 0;
    private int $matricula;
    private string $nombre;
    private string $apellido;

    public function __construct($matricula,$nombre,$apellido){
        $this->id = $this->id++;
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getId():int{
        return $this->id;
    }
    
    public function setId($id):void{
        $this->id = $id;
    }

    public function getMatricula():int{
        return $this->matricula;
    }
    
    public function setMatricula($matricula):void{
        $this->matricula = $matricula;
    }

    public function getNombre():string{
        return $this->nombre;
    }
    
    public function setNombre($nombre):void{
        $this->nombre = $nombre;
    }

    public function getApellido():string{
        return $this->apellido;
    }
    
    public function setApellido($apellido):void{
        $this->apellido = $apellido;
    }

    public function toJson(){
        return `{
            "id":"$this->id",
            "matricula":"$this->matricula",
            "nombre":"$this->nombre",
            "apellido":"$this->apellido"
        }`;
    }
}
