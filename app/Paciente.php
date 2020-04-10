<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombre','cedula', 'direccion', 'nacimiento', 'genero', 'numregistro', 'numcama'];
}
