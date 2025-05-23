<?php

namespace App\Http\Controllers;

use App\Sesion;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Sesion::all());
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
            'nombre' => 'required|string|max:100',
            'fecha' => 'required|string|max:30',
            'responsable' => 'required|string|max:100',
        ]);
        $sesion = Sesion::create($validated);
        return response()->json($sesion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sesion = Sesion::find($id);

        if (!$sesion) {
            return response()->json(['message' => 'Sesión no encontrada'], 404);
        }

        return response()->json($sesion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(sesion $sesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sesion $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(sesion $sesion)
    {
        //
    }
}
