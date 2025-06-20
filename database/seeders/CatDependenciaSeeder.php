<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CatDependenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cat_dependencia')->insert([
    ['id_cat_dependencia' => 1, 'descripcion' => 'Secretaría de Gobernación (SEGOB)'],
    ['id_cat_dependencia' => 2, 'descripcion' => 'Secretaría de Relaciones Exteriores (SRE)'],
    ['id_cat_dependencia' => 3, 'descripcion' => 'Secretaría de la Defensa Nacional (SEDENA)'],
    ['id_cat_dependencia' => 4, 'descripcion' => 'Secretaría de Marina (SEMAR)'],
    ['id_cat_dependencia' => 5, 'descripcion' => 'Secretaría de Seguridad y Protección Ciudadana (SSPC)'],
    ['id_cat_dependencia' => 6, 'descripcion' => 'Secretaría de Hacienda y Crédito Público (SHCP)'],
    ['id_cat_dependencia' => 7, 'descripcion' => 'Secretaría de Bienestar'],
    ['id_cat_dependencia' => 8, 'descripcion' => 'Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT)'],
    ['id_cat_dependencia' => 9, 'descripcion' => 'Secretaría de Energía (SENER)'],
    ['id_cat_dependencia' => 10, 'descripcion' => 'Secretaría de Economía (SE)'],
    ['id_cat_dependencia' => 11, 'descripcion' => 'Secretaría de Agricultura y Desarrollo Rural (SADER)'],
    ['id_cat_dependencia' => 12, 'descripcion' => 'Secretaría de Infraestructura, Comunicaciones y Transportes (SICT)'],
    ['id_cat_dependencia' => 13, 'descripcion' => 'Secretaría de la Función Pública (SFP)'],
    ['id_cat_dependencia' => 14, 'descripcion' => 'Secretaría de Educación Pública (SEP)'],
    ['id_cat_dependencia' => 15, 'descripcion' => 'Secretaría de Salud'],
    ['id_cat_dependencia' => 16, 'descripcion' => 'Secretaría del Trabajo y Previsión Social (STPS)'],
    ['id_cat_dependencia' => 17, 'descripcion' => 'Secretaría de Cultura'],
    ['id_cat_dependencia' => 18, 'descripcion' => 'Secretaría de Turismo (SECTUR)'],
    ['id_cat_dependencia' => 19, 'descripcion' => 'Consejería Jurídica del Ejecutivo Federal'],
    ['id_cat_dependencia' => 20, 'descripcion' => 'Oficina de la Presidencia de la República'],
]);
    }
}
