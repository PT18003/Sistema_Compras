<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empleado extends Model
{
    use SoftDeletes;//para borrado logico
    protected $table = 'Empleados';
/*     public function departamento()
    {
        return $this->belongsTo(Departamento::class,'id_departamento');
    } */
    public static function towns($id)//metodo para clasificar los mucipios en el select
    {
        return Municipio::where('id_departamento','=',$id)->get();
        
    }
    public static function etowns($empleado)//ignorar esto
    {
        return Empleado::where('id','=',$empleado)->get();
        
    }
    public function municipio()//funcion o metodo que son para relacionar, usar belongsTo en las tablas hijas.
    {
        return $this->belongsTo(Municipio::class,'id');
    }
    public function genero()
    {
        return $this->belongsTo(Genero::class,'genero_id');
    }
    public function areatrabajo()
    {
        return $this->belongsTo(AreaTrabajo::class,'areatrabajo_id');
    }
    public function estadocivil()
    {
        return $this->belongsTo(EstadoCivil::class,'estadocivil_id');
    }
}
