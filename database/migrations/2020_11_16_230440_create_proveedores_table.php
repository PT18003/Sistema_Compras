<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');//para el ID
            $table->bigInteger('id_municipio')->unsigned();
            $table->string('nombre',100)->nullable(false);//de tipo string y que no acepte valores nulos
            $table->string('direccion',200)->nullable(false);
            $table->string('telefono',8)->nullable(false);
            $table->string('correo',30)->nullable(false);
            $table->string('nit',12)->nullable(false);
            $table->decimal('montoMin',6,2)->nullable(false);
            $table->timestamps();

            $table->foreign('id_municipio')->references('id')->on('municipio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
