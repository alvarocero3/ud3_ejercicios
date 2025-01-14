<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all(); // Devuelve todas las asignaturas
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id); // Devuelve una asignatura específica
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        return Asignatura::create($validatedData); // Crea una nueva asignatura
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $asignatura->update($validatedData); // Actualiza la asignatura
        return $asignatura;
    }

    public function destroy($id)
    {
        Asignatura::destroy($id); // Elimina una asignatura
        return response()->json(['message' => 'Asignatura eliminada']);
    }
}