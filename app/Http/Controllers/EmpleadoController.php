<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Empleado::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email',
            'puesto' => 'required|string|max:255',
        ]);
        
        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);
        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
        return response()->json($empleado, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
        $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:empleados,email,' . $id,
            'puesto' => 'sometimes|string|max:255',
        ]);
        $empleado->update($request->all());
        return response()->json($empleado, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
        $empleado->delete();
        return response()->json(['message' => 'Empleado eliminado'], 200);
    }
}