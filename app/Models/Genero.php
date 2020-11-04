<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
class Genero extends Model
{
    protected $table = 'Genero';
    public $timestamps = false;
    public function empleados()
    {

            return $this->hasMany(Empleado::class);
    }
}
