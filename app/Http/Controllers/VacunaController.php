<?php

namespace App\Http\Controllers;

use App\Vacuna;
use Illuminate\Http\Request;
use Session;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunas = Vacuna::all();
        return view('vacunas.index', compact('vacunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacunas.create');
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
            'fecha' => 'required',
            'numero' => 'required',
            'descripcion' => 'required',
            'mascota_id' => 'required',
            'medicina_id' => 'required',
        ]);

        Vacuna::create($request->all());

       
        Session::flash('message','Vacuna creado correctamente');
        return redirect()->route('vacunas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Vacuna $vacuna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacuna $vacuna)
    {
        return view('vacunas.edit', compact('vacuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacuna $vacuna)
    {
        $request->validate([
            'fecha' => 'required',
            'numero' => 'required',
            'descripcion' => 'required',
            'mascota_id' => 'required',
            'medicina_id' => 'required',
        ]);


        $vacuna->update($request->all());
       
        Session::flash('message','Vacuna actualizado correctamente');
        return redirect()->route('vacunas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacuna $vacuna)
    {
        $vacuna->delete();

        Session::flash('message','Vacuna borrado correctamente');
        return redirect()->route('vacunas.index');
    }
}

