<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
class EstadoCivil extends Model
{
    protected $table = 'EstadoCivil';
    public $timestamps = false;
    public function empleados()
    {

            return $this->hasMany(Empleado::class);
    }
}
