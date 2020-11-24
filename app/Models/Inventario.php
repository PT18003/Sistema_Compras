<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventario';

     /**
     * Atributos que son asignados en masa.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcionRol',
        'stock',
        'estadoArt',
    ];

     public function articulosProveedor()
    {

            return $this->hasMany(ArticulosProveedor::class, 'id_inventario');
    }
}
