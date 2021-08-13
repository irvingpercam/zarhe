<?php

namespace App\Http\Controllers;

use App\Models\Tipos;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTiposRequest;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tipos.index', [
            'tipos' => Tipos::orderBy('Nombre', 'ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.create', [
            'tipo' => new Tipos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTiposRequest $request)
    {
        $Name = request('Nombre');
        $Name = preg_replace('/[\s_]/', '-', $Name);
        Tipos::create([
            'Nombre' => request('Nombre'),
            'Siglas' => request('Siglas'),
            'url' => strtolower($Name),
        ]);
        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tipos $tipo)
    {
        return view('tipos.show', [
            'tipo' => $tipo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipos $tipo)
    {
        return view('tipos.edit', [
            'tipo' => $tipo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tipos $tipo, CreateTiposRequest $request)
    {
        $Name = request('Nombre');
        $Name = preg_replace('/[\s_]/', '-', $Name);
        $tipo->update($request->validated());
        $tipo->update(array('url' => strtolower($Name)));
        return redirect()->route('tipos.show', $tipo)->with('status', '¡El tipo fue actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipos $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index')->with('status', '¡El tipo fue eliminado con éxito!');
    }
}
