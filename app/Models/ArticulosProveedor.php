<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticulosProveedor extends Model
{
    use SoftDeletes;//para borrado logico
    
    protected $table = 'articulos_proveedores';

     /**
     * Atributos que son asignados en masa.
     *
     * @var array
     */
    protected $fillable = [
        'id_inventario',
        'id_proveedor',
        'codigoArticulo',
        'descripcionRol',
        'fechaInicio',
        'fechaFinal',
        'precio',
        'periodoPago',
        'descuento',
        'tiempoEntrega',
    ];

     public function inventario()//funcion o metodo que son para relacionar, usar belongsTo en las tablas hijas.
    {
        return $this->belongsTo(Inventario::class, 'id_inventario');
    }

     public function proveedor()//funcion o metodo que son para relacionar, usar belongsTo en las tablas hijas.
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}
