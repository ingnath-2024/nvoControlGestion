<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder; use Illuminate\Support\Facades\DB;
class Destinatario extends Seeder 
/** * Run the database seeds. * * @return void */ 
    {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all rows from the table
        DB::table('cat_destinatario')->truncate();->insert([ ['id_origen' => 1, 'nombre' => 'Unidad de Enlace'], ['id_origen' => 2, 'nombre' => 'Administrativo'], ['id_origen' => 3, 'nombre' => 'DGEL'], ['id_origen' => 4, 'nombre' => 'DGIL'], ['id_origen' => 5, 'nombre' => 'Proceso'], ['id_origen' => 6, 'nombre' => 'Persona en específico'], ]); } }
