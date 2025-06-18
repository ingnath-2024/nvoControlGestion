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
        Schema::create('ctrl_gestion_expediente', function (Blueprint $table) {
            $table->id('id_ctrl_gestion_expediente'); // Llave primaria autoincremental
            $table->unsignedBigInteger('id_ctrl_gestion_ingreso_documento');
            $table->unsignedBigInteger('id_ctrl_gestion_tt_seguimiento');
            $table->unsignedBigInteger('id_origen_enviado_dependencia');
            $table->text('liga_referencia')->nullable();
            $table->char('id_tipo_ingreso', 1);
            $table->timestamps(); // created_at y updated_at

            // Llaves foráneas con eliminación en cascada
            $table->foreign('id_ctrl_gestion_ingreso_documento')
                  ->references('id_ctrl_gestion_ingreso_documento')->on('ctrl_gestion_ingreso_documentos')
                  ->onDelete('cascade');

            $table->foreign('id_ctrl_gestion_tt_seguimiento')
                  ->references('id_ctrl_gestion_tt_seguimiento')->on('ctrl_gestion_tt_seguimiento')
                  ->onDelete('cascade');

            $table->foreign('id_origen_enviado_dependencia')
                  ->references('id_origen')->on('origen')
                  ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctrl_gestion_expediente');

    }
};
