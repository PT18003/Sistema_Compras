<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EstadoCivil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreEstado')->nullable(false);
            
        });
        Schema::create('Genero', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('genero',15)->nullable(false);
            
        });
        Schema::create('AreaTrabajo', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('nombreDep',50)->nullable(false);
            $table->timestamps();
            
        });
        Schema::create('Departamento', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('departamento',25)->nullable(false);
            $table->timestamps();
            
        });
        Schema::create('Municipio', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('municipio',25)->nullable(false);
                                // tiene que coincidir el nombre de la tabla y el campo (tabla_campo)
            //$table->foreignId('departamento_id')->constrained();
            //sino, esta esta otra forma: 
            $table->unsignedBigInteger('id_departamento');
            $table->foreign('id_departamento')->references('id')->on('Departamento');
            $table->timestamps();
        });
        Schema::create('Empleados', function (Blueprint $table) 
        {
            $table->bigIncrements('id');//para el ID
            $table->string('nombres',30)->nullable(false);//de tipo string y que no acepte valores nulos
            $table->string('apellidos',30)->nullable(false);
            $table->string('direccion',50)->nullable(false);
            $table->bigInteger('id_municipio')->unsigned(); 
            /*el campo para llave foranea se debe de declarar bigInteger si se ha declarado 
            bigIncrement en la llave primaria a la que se va hacer relacion*/
            $table->bigInteger('genero_id')->unsigned();
            $table->string('telefono',8)->nullable(false);
            $table->string('dui',9)->nullable(false);
            $table->decimal('salario',6,2)->nullable(false);
            $table->date('vencimientoContrato')->nullable(false);
            $table->bigInteger('areatrabajo_id')->unsigned();
            $table->bigInteger('estadocivil_id')->unsigned();
            //$table->foreign('genero_id')->references('id')->on('Genero');
            $table->timestamps();//crea 2 campos en la tabla de fecha creado y fecha actualizado

            $table->foreign('id_municipio')->references('id')->on('Municipio'); //refrencias para las llaves foraneas 
            $table->foreign('areatrabajo_id')->references('id')->on('AreaTrabajo');
            $table->foreign('genero_id')->references('id')->on('Genero');
            $table->foreign('estadocivil_id')->references('id')->on('EstadoCivil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
