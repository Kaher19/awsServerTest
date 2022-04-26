<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Alumno extends Model
{
    use HasFactory;

    private Integer $id;
    private Integer $matricula;
    private string $nombre;
    private string $apellido;

    public function getId():Integer{
        return $this->id;
    }
    public function setId($id):void{
        $this->id = $id;
    }

}
