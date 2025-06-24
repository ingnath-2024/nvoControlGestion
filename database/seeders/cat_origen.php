<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class cat_origen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all rows from the table
        DB::table('cat_origen')->truncate();
          DB::table('cat_origen')->insert([
            ['id_cat_origen' => 1, 'descripcion' => 'Cámara de Diputados'],
            ['id_cat_origen' => 2, 'descripcion' => 'Senado de la República'],
            ['id_cat_origen' => 3, 'descripcion' => 'Congreso General'],
            ['id_cat_origen' => 4, 'descripcion' => 'Ejecutivo Federal'],
            ['id_cat_origen' => 5, 'descripcion' => 'Comisión Permanente'],
            ['id_cat_origen' => 6, 'descripcion' => 'Poder Judicial Federal'],
            ['id_cat_origen' => 7, 'descripcion' => 'Congreso de Aguascalientes'],
            ['id_cat_origen' => 8, 'descripcion' => 'Congreso de Baja California'],
            ['id_cat_origen' => 9, 'descripcion' => 'Congreso de Baja California Sur'],
            ['id_cat_origen' => 10, 'descripcion' => 'Congreso de Campeche'],
            ['id_cat_origen' => 11, 'descripcion' => 'Congreso de Chiapas'],
            ['id_cat_origen' => 12, 'descripcion' => 'Congreso de Chihuahua'],
            ['id_cat_origen' => 13, 'descripcion' => 'Congreso de Coahuila'],
            ['id_cat_origen' => 14, 'descripcion' => 'Congreso de Colima'],
            ['id_cat_origen' => 15, 'descripcion' => 'Congreso de Durango'],
            ['id_cat_origen' => 16, 'descripcion' => 'Congreso de Guanajuato'],
            ['id_cat_origen' => 17, 'descripcion' => 'Congreso de Guerrero'],
            ['id_cat_origen' => 18, 'descripcion' => 'Congreso de Hidalgo'],
            ['id_cat_origen' => 19, 'descripcion' => 'Congreso de Jalisco'],
            ['id_cat_origen' => 20, 'descripcion' => 'Congreso del Estado de México'],
            ['id_cat_origen' => 21, 'descripcion' => 'Congreso de Michoacán'],
            ['id_cat_origen' => 22, 'descripcion' => 'Congreso de Morelos'],
            ['id_cat_origen' => 23, 'descripcion' => 'Congreso de Nayarit'],
            ['id_cat_origen' => 24, 'descripcion' => 'Congreso de Nuevo León'],
            ['id_cat_origen' => 25, 'descripcion' => 'Congreso de Oaxaca'],
            ['id_cat_origen' => 26, 'descripcion' => 'Congreso de Puebla'],
            ['id_cat_origen' => 27, 'descripcion' => 'Congreso de Querétaro'],
            ['id_cat_origen' => 28, 'descripcion' => 'Congreso de Quintana Roo'],
            ['id_cat_origen' => 29, 'descripcion' => 'Congreso de San Luis Potosí'],
            ['id_cat_origen' => 30, 'descripcion' => 'Congreso de Sinaloa'],
            ['id_cat_origen' => 31, 'descripcion' => 'Congreso de Sonora'],
            ['id_cat_origen' => 32, 'descripcion' => 'Congreso de Tabasco'],
            ['id_cat_origen' => 33, 'descripcion' => 'Congreso de Tamaulipas'],
            ['id_cat_origen' => 34, 'descripcion' => 'Congreso de Tlaxcala'],
            ['id_cat_origen' => 35, 'descripcion' => 'Congreso de Veracruz'],
            ['id_cat_origen' => 36, 'descripcion' => 'Congreso de Yucatán'],
            ['id_cat_origen' => 37, 'descripcion' => 'Congreso de Zacatecas'],
            ['id_cat_origen' => 38, 'descripcion' => 'Congreso de la Ciudad de México'],
            ['id_cat_origen' => 39, 'descripcion' => 'Suprema Corte de Justicia de la Nación'],
            ['id_cat_origen' => 40, 'descripcion' => 'Instituto Nacional Electoral'],
            ['id_cat_origen' => 41, 'descripcion' => 'Organismos Públicos Locales'],
            ['id_cat_origen' => 42, 'descripcion' => 'OCAs'],
            ['id_cat_origen' => 43, 'descripcion' => 'Justicia Local'],
            ['id_cat_origen' => 44, 'descripcion' => 'Justicia Regional/Internacional'],
            ['id_cat_origen' => 45, 'descripcion' => 'Protección Jurisdiccional DDHH'],
            ['id_cat_origen' => 46, 'descripcion' => 'Comunicación Social'],
            ['id_cat_origen' => 47, 'descripcion' => 'Proceso Legislativo'],
            ['id_origen' => 48, 'descripcion' => 'Secretaría de Gobernación'],
        ]);

    }
}
