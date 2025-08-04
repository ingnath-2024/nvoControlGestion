<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
class NuevoExpedienteController extends Controller
{
    /**
     * Mostrar una lista de los Expedientes.
     */
    public function index()
    {
        $Documento = NuevoExpediente::all();
        return response()->json($Expediente);
    }

    /**
     * Almacenar un nuevo Documento "ctrl_gestion_ingreso_documentoS
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_ctrl_gestion_ingreso_documento' => 'required',
            'id_origen_enviado' => 'required',
            'id_origen_enviado_dependencia' => 'required',
            'id_estatus' => 'required|boolean',
            'fecha_recepcion' => 'required',
            'fecha_oficiio' => 'required',
            'folio_ctrl_>gestion' => 'required|integer',
            'oficio_entrada_congreso_consejeria' => 'required|string',
            'nvo_oficio_conceso_alcance_apt' => 'required|string',
            'folio_volante_segob' => 'required',
            'fecha_aprobacion' => 'required',
            'asunto' => 'required',
        ]);

        $documento = IngresaDocumento::create($data);

        return response()->json($documento, 201);
    }

    /**
     * Mostrar un documento en específico.
     */
    public function show($id)
    {
        $documento = MuestraDocumento::findOrFail($id);
        return response()->json($documento);
    }

    /**
     * Actualizar un documento existente.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id_ctrl_gestion_ingreso_documento' => 'required',
            'id_origen_enviado' => 'required',
            'id_origen_enviado_dependencia' => 'required',
            'id_estatus' => 'required|boolean',
            'fecha_recepcion' => 'required',
            'fecha_oficiio' => 'required',
            'folio_ctrl_>gestion' => 'required|integer',
            'oficio_entrada_congreso_consejeria' => 'required|string',
            'nvo_oficio_conceso_alcance_apt' => 'required|string',
            'folio_volante_segob' => 'required',
            'fecha_aprobacion' => 'required',
            'asunto' => 'required',
        ]);

        $documento = MuestraDocumento::findOrFail($id);
        $documento->update($data);

        return response()->json($documento);
    }

    /**
     * Eliminar un procedimiento.
     */
    public function destroy($id)
    {
        $documento = MuestraDocumento::findOrFail($id);
        $documento->delete();

        return response()->json(null, 204);
    }
}