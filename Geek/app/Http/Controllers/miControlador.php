<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comidas;

class miControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comidas = comidas::all();
        return $comidas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comida = new comidas();
        $comida->nombre = $request->nombre;
        $comida->calorias = $request->calorias;
        $comida->proteinas = $request->proteinas;
        $comida->grasas = $request->grasas;
        $comida->carbohidratos = $request->carbohidratos;

        $comida->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $comida = comidas::findOrFail($request->id);
        return $comida;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $comida = comidas::findOrFail($request->id);
        $comida->nombre = $request->nombre;
        $comida->calorias = $request->calorias;
        $comida->proteinas = $request->proteinas;

        $comida->save();
        return $comida;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $comida = comidas::destroy($request->id);
        return $comida;
    }
}
