<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directores extends Model
{
    protected $table = 'directores';
    protected $fillable = array('nombre','apellido');
}
