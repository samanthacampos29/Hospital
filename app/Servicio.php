<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['fecha', 'descripcion', 'idHospital', 'idLaboratorio'];
}
