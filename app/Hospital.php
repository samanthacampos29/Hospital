<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['nombre', 'direccion', 'telefono', 'cantcamas'];
}
