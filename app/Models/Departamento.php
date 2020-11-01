<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'Departamento';//para elejir que tabla usar
    public $timestamps = false;//crea por defecto en la tabla 2 campos de creado y editado, ponemos false para quitarselo
}
