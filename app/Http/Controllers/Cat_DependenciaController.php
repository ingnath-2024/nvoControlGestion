<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    public function index()
    {
        $dependencias = Dependencia::all();
        return view('tu-vista', compact('dependencias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Dependencia::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->back()->with('success', 'Dependencia creada correctamente');
    }
}