<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Profesor extends Model
{
    use HasFactory;

    private Integer $id;
    private Integer $matricula;
    private string $nombre;
    private string $apellido;
}
