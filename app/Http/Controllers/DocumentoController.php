<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    store(Request $request){
        $data = $request->all();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['deleted_at'] = null;
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 1;
        $data['tipo'] = 1;
        $data['fecha'] = date('Y-m-d H:i:s');
        return Documento::create($data);
    }
}
