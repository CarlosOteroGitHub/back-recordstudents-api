<?php

namespace App\Http\Controllers;

use App\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = Asistencia::with(['estudiante', 'sesion'])->get();
        return response()->json($asistencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'sesion_id' => 'required|exists:sesions,id',
            'fechahora' => 'required|date',
        ]);
        $sesion = Asistencia::create($validated);
        return response()->json($sesion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        if (!$asistencia) {
            return response()->json(['message' => 'Asistencia no encontrado'], 404);
        }

        return response()->json($asistencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(asistencia $asistencia)
    {
        //
    }
}
