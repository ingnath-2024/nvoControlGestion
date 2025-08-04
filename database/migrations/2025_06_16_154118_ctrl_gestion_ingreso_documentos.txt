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
        Schema::dropIfExists('ctrl_gestion_ingreso_documentos');
        Schema::create('ctrl_gestion_ingreso_documentos', function (Blueprint $table) 
        {
            $table->id('id_ctrl_gestion_ingreso_documento');
            $table->foreignId('id_origen_enviado'); // Relación con la tabla origen
            $table->foreignId('id_origen_enviado_dependencia'); // Relación con la tabla origen
            $table->boolean('id_estatus INT NOT NULL'); //Prendido si esta terminado, apagado si no esta terminado
            $table->DATE('fecha_recepcion');
            $table->DATE('fecha_oficio DATE');
            $table->integer('folio_ctrl_gestion INT NOT NULL');
            $table->string('oficio_entrada_congreso_consejeria TEXT NOT NULL');
            $table->string('folio_volante_segob TEXT');
            $table->DATE('fecha_aprobacion DATE NOT NULL');
            $table->string('asunto TEXT NOT NULL');
        });
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctrl_gestion_ingreso_documentos');
    }
};
