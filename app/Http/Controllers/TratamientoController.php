<?php

namespace App\Http\Controllers;

use App\Tratamiento;
use Illuminate\Http\Request;
use Session;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientos = Tratamiento::all();
        return view('tratamientos.index', compact('tratamientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tratamientos.create');
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
            'indicacion' => 'required',
            'costo' => 'required',
        ]);

        Tratamiento::create($request->all());

       
        Session::flash('message','Servicio creado correctamente');
        return redirect()->route('tratamientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamiento $tratamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Tratamiento $tratamiento)
    {
        return view('tratamientos.edit', compact('tratamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamiento $tratamiento)
    {
        $request->validate([
            'nombre' => 'required',
            'indicacion' => 'required',
            'costo' => 'required',
        ]);


        $tratamiento->update($request->all());
       
        Session::flash('message','Tratamiento actualizado correctamente');
        return redirect()->route('tratamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tratamiento $tratamiento)
    {
        $tratamiento->delete();

        Session::flash('message','Tratamiento borrado correctamente');
        return redirect()->route('tratamientos.index');
    }
}
