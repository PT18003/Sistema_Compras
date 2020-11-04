<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
use Empleados;

class Municipio extends Model
{
    protected $table = 'Municipio';//para elejir que tabla usar
    public $timestamps = false;//crea por defecto en la tabla 2 campos de creado y editado, ponemos false para quitarselo
    public function departamentos()
    {
        return $this->belongsTo(Departamento::class,'id_departamento');
    }
    public function empleados()
    {

            return $this->hasMany(Empleado::class);
    }
}
