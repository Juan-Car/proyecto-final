<?php

namespace App\Http\Controllers;

use App\Boleta;
use Illuminate\Http\Request;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletas = Boleta::all();
        return view('boletas.index', compact('boletas'));
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
        $request->validate([
            'servicio_id' => 'required',
            'producto_id' => 'required',
            'tratamiento_id' => 'required',
            'medicina_id' => 'required',
            'vacuna_id' => 'required',
            'total' => 'required',
        ]);

        Boleta::create($request->all());
        return redirect()->route('boletas.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function show(Boleta $boleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Boleta $boleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boleta $boleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boleta $boleta)
    {
        //
    }
}
