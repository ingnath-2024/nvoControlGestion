<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ctrl_gestion_turno_seguimiento');
        Schema::create('ctrl_gestion_turno_seguimiento', function (Blueprint $table) {
            $table->id('id_ctrl_gestion_turno_seguimiento'); // Llave primaria autoincremental
            $table->unsignedBigInteger('id_cat_dependencia');
            $table->unsignedBigInteger('id_ctrl_gestion_ingreso_documento');
            $table->date('fecha_ingreso_turnado')->nullable();
            $table->text('oficio_dependencia_terminado');
            $table->text('observaciones')->nullable();
            $table->timestamps(); // created_at y updated_at

           
                  
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctrl_gestion_turno_seguimiento');
    }
};
