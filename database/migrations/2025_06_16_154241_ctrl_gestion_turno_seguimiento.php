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
        Schema::create('ctrl_gestion_turno_seguimiento', function (Blueprint $table) {
            $table->id('id_ctrl_gestion_turno_seguimiento'); // Llave primaria autoincremental
            $table->unsignedBigInteger('id_cat_dependencia');
            $table->unsignedBigInteger('id_ctrl_gestion_ingreso_documento');
            $table->date('fecha_ingreso_turnado')->nullable();
            $table->text('oficio_dependencia_terminado');
            $table->text('observaciones')->nullable();
            $table->timestamps(); // created_at y updated_at

            // Llaves foráneas sin eliminación en cascada
            $table->foreign('id_cat_dependencia')->references('id_cat_dependencia')->on('cat_dependencia');
                  

            $table->foreign('id_ctrl_gestion_ingreso_documento')
                  ->references('id_ctrl_gestion_ingreso_documento')->on('ctrl_gestion_ingreso_documentos');
                  
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
