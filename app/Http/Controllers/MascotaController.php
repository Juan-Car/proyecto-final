<?php

namespace App\Http\Controllers;

use App\Categoria;

use App\Cliente;
use App\Mascota;
use Illuminate\Http\Request;
use Session;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        $cliente = Cliente::all();
        return view('mascotas.create');
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
            'raza' => 'required',
            'peso' => 'required',
            'categoria_id' => 'required',
            'cliente_id' => 'required',
        ]);

        Mascota::create($request->all());

       
        Session::flash('message','Mascota creado correctamente');
        return redirect()->route('mascotas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required',
            'raza' => 'required',
            'peso' => 'required',
            'categoria_id' => 'required',
            'cliente_id' => 'required',
        ]);


        $mascota->update($request->all());
       
        Session::flash('message','Mascota actualizado correctamente');
        return redirect()->route('mascotas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        Session::flash('message','Mascota borrado correctamente');
        return redirect()->route('mascotas.index');
    }
}
