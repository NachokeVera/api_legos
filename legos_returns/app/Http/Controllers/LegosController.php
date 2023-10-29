<?php

namespace App\Http\Controllers;

use App\Http\Requests\LegoRequest;
use Illuminate\Http\Request;
use App\Models\Lego;

class LegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lego = Lego::all();

        return response()->json($lego);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LegoRequest $request)
    {
        $lego = new Lego();
        $lego->numero= $request->numero;
        $lego->nombre = $request->nombre;
        $lego->tema = $request->tema;
        $lego->precio = $request->precio;
        $lego->cantidad = $request->cantidad;
        $lego->save();
        return response()->json($lego);

    }

    /**
     * Display the specified resource.
     */
    public function show(Lego $lego)
    {
        
        return $lego;
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lego $lego)
    {
        return $lego->delete();
    }
}
