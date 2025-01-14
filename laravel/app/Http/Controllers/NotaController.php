<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        return Nota::all(); // Devuelve todas las notas
    }

    public function show($id)
    {
        return Nota::findOrFail($id); // Devuelve una nota específica
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'nota' => 'required|numeric|between:0,10'
        ]);

        return Nota::create($validatedData); // Crea una nueva nota
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);

        $validatedData = $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'nota' => 'required|numeric|between:0,10'
        ]);

        $nota->update($validatedData); // Actualiza la nota
        return $nota;
    }

    public function destroy($id)
    {
        Nota::destroy($id); // Elimina una nota
        return response()->json(['message' => 'Nota eliminada']);
    }
}
