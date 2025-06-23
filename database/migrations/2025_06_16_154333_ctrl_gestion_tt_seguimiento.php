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
        Schema::create('ctrl_gestion_tt_seguimiento', function (Blueprint $table) {
            $table->id('id_ctrl_gestion_tt_seguimiento'); // Llave primaria autoincremental
            $table->unsignedBigInteger('id_ctrl_gestion_ingreso_documento');
            $table->unsignedBigInteger('id_ctrl_gestion_turno_seguimiento');
            $table->unsignedBigInteger('id_origen_respuesta_seguimiento');
            $table->unsignedBigInteger('id_cat_dependencia');
            $table->char('id_tipo_ingreso', 1);
            $table->text('oficio_respuesta_seguimiento_UE')->nullable();
            $table->date('fecha_respuesta_seguimiento_UE')->nullable();
            $table->text('oficio_alcance_seguimiento')->nullable();
            $table->date('fecha_alcance_seguimiento')->nullable();
            $table->date('fecha_aprobacion_seguimiento')->nullable();
            $table->text('instruccion')->nullable();
            $table->text('respuesta')->nullable();
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
        Schema::dropIfExists('ctrl_gestion_tt_seguimiento');
    }
};
