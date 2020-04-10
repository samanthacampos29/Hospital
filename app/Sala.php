<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nombre', 'cantcamas', 'idPaciente', 'idHospital'];
}
