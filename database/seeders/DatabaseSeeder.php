<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Delete all rows from the table
        DB::table('cat_destinatario')->truncate();
          DB::table('cat_destinatario')->insert([
            ['id_cat_destinatario' => 1, 'descripcion' => 'Cámara de Diputados'],
            ['id_cat_destinatario' => 2, 'descripcion' => 'Senado de la República'],
            ['id_cat_destinatario' => 3, 'descripcion' => 'Congreso General'],
            ['id_cat_destinatario' => 4, 'descripcion' => 'Ejecutivo Federal'],
            ['id_cat_destinatario' => 5, 'descripcion' => 'Comisión Permanente'],
            ['id_cat_destinatario' => 6, 'descripcion' => 'Poder Judicial Federal'],
            ['id_cat_destinatario' => 7, 'descripcion' => 'Congreso de Aguascalientes'],
            ['id_cat_destinatario' => 8, 'descripcion' => 'Congreso de Baja California'],
            ['id_cat_destinatario' => 9, 'descripcion' => 'Congreso de Baja California Sur'],
            ['id_cat_destinatario' => 10, 'descripcion' => 'Congreso de Campeche'],
            ['id_cat_destinatario' => 11, 'descripcion' => 'Congreso de Chiapas'],
            ['id_cat_destinatario' => 12, 'descripcion' => 'Congreso de Chihuahua'],
        ]);
    }
}
