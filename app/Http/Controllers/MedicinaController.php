<?php

namespace App\Http\Controllers;

use App\Medicina;
use Illuminate\Http\Request;
use Session;

class MedicinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicinas = Medicina::all();
        return view('medicinas.index', compact('medicinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicinas.create');
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
            'nombre' => 'required',
            'precio' => 'required',
            'dosis' => 'required',
        ]);

        Medicina::create($request->all());

       
        Session::flash('message','Medicina creado correctamente');
        return redirect()->route('medicinas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Medicina $medicina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicina $medicina)
    {
        return view('medicinas.edit', compact('medicina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicina $medicina)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'dosis' => 'required',
        ]);


        $medicina->update($request->all());
       
        Session::flash('message','Medicina actualizado correctamente');
        return redirect()->route('medicinas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicina $medicina)
    {
        $medicina->delete();

        Session::flash('message','Medicina borrado correctamente');
        return redirect()->route('medicinas.index');
    }
}