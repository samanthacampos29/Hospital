<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $fillable = ['nombre', 'direccion', 'telefono'];
}
