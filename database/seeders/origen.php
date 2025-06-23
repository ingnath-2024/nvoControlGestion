<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class origen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all rows from the table
        DB::table('origen')->truncate();
          DB::table('origen')->insert([
            ['id_origen' => 1, 'descripcion' => 'Cámara de Diputados'],
            ['id_origen' => 2, 'descripcion' => 'Senado de la República'],
            ['id_origen' => 3, 'descripcion' => 'Congreso General'],
            ['id_origen' => 4, 'descripcion' => 'Ejecutivo Federal'],
            ['id_origen' => 5, 'descripcion' => 'Comisión Permanente'],
            ['id_origen' => 6, 'descripcion' => 'Poder Judicial Federal'],
            ['id_origen' => 7, 'descripcion' => 'Congreso de Aguascalientes'],
            ['id_origen' => 8, 'descripcion' => 'Congreso de Baja California'],
            ['id_origen' => 9, 'descripcion' => 'Congreso de Baja California Sur'],
            ['id_origen' => 10, 'descripcion' => 'Congreso de Campeche'],
            ['id_origen' => 11, 'descripcion' => 'Congreso de Chiapas'],
            ['id_origen' => 12, 'descripcion' => 'Congreso de Chihuahua'],
            ['id_origen' => 13, 'descripcion' => 'Congreso de Coahuila'],
            ['id_origen' => 14, 'descripcion' => 'Congreso de Colima'],
            ['id_origen' => 15, 'descripcion' => 'Congreso de Durango'],
            ['id_origen' => 16, 'descripcion' => 'Congreso de Guanajuato'],
            ['id_origen' => 17, 'descripcion' => 'Congreso de Guerrero'],
            ['id_origen' => 18, 'descripcion' => 'Congreso de Hidalgo'],
            ['id_origen' => 19, 'descripcion' => 'Congreso de Jalisco'],
            ['id_origen' => 20, 'descripcion' => 'Congreso del Estado de México'],
            ['id_origen' => 21, 'descripcion' => 'Congreso de Michoacán'],
            ['id_origen' => 22, 'descripcion' => 'Congreso de Morelos'],
            ['id_origen' => 23, 'descripcion' => 'Congreso de Nayarit'],
            ['id_origen' => 24, 'descripcion' => 'Congreso de Nuevo León'],
            ['id_origen' => 25, 'descripcion' => 'Congreso de Oaxaca'],
            ['id_origen' => 26, 'descripcion' => 'Congreso de Puebla'],
            ['id_origen' => 27, 'descripcion' => 'Congreso de Querétaro'],
            ['id_origen' => 28, 'descripcion' => 'Congreso de Quintana Roo'],
            ['id_origen' => 29, 'descripcion' => 'Congreso de San Luis Potosí'],
            ['id_origen' => 30, 'descripcion' => 'Congreso de Sinaloa'],
            ['id_origen' => 31, 'descripcion' => 'Congreso de Sonora'],
            ['id_origen' => 32, 'descripcion' => 'Congreso de Tabasco'],
            ['id_origen' => 33, 'descripcion' => 'Congreso de Tamaulipas'],
            ['id_origen' => 34, 'descripcion' => 'Congreso de Tlaxcala'],
            ['id_origen' => 35, 'descripcion' => 'Congreso de Veracruz'],
            ['id_origen' => 36, 'descripcion' => 'Congreso de Yucatán'],
            ['id_origen' => 37, 'descripcion' => 'Congreso de Zacatecas'],
            ['id_origen' => 38, 'descripcion' => 'Congreso de la Ciudad de México'],
            ['id_origen' => 39, 'descripcion' => 'Suprema Corte de Justicia de la Nación'],
            ['id_origen' => 40, 'descripcion' => 'Instituto Nacional Electoral'],
            ['id_origen' => 41, 'descripcion' => 'Organismos Públicos Locales'],
            ['id_origen' => 42, 'descripcion' => 'OCAs'],
            ['id_origen' => 43, 'descripcion' => 'Justicia Local'],
            ['id_origen' => 44, 'descripcion' => 'Justicia Regional/Internacional'],
            ['id_origen' => 45, 'descripcion' => 'Protección Jurisdiccional DDHH'],
            ['id_origen' => 46, 'descripcion' => 'Comunicación Social'],
            ['id_origen' => 47, 'descripcion' => 'Proceso Legislativo'],
            ['id_origen' => 48, 'descripcion' => 'Secretaría de Gobernación'],
        ]);

    }
}
