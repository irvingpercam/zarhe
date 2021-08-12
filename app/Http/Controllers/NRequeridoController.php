<?php

namespace App\Http\Controllers;

use App\Models\NRequerido;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNRequeridoRequest;

class NRequeridoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nrequerido.index', [
            'nrequeridos' => NRequerido::orderBy('Nombre', 'ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nrequerido.create', [
            'nrequerido' => new NRequerido
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNRequeridoRequest $request)
    {
        $Name = request('Nombre');
        $Name = preg_replace('/[\s_]/', '-', $Name);
        NRequerido::create([
            'Nombre' => request('Nombre'),
            'url' => strtolower($Name),
        ]);
        return redirect()->route('nrequerido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NRequerido $nrequerido)
    {
        return view('nrequerido.show', [
            'nrequerido' => $nrequerido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NRequerido $nrequerido)
    {
        return view('nrequerido.edit', [
            'nrequerido' => $nrequerido
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NRequerido $nrequerido, CreateNRequeridoRequest $request)
    {
        $Name = request('Nombre');
        $Name = preg_replace('/[\s_]/', '-', $Name);
        $nrequerido->update($request->validated());
        $nrequerido->update(array('url' => strtolower($Name)));
        return redirect()->route('nrequerido.show', $nrequerido)->with('status', '¡El nivel fue actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NRequerido $nrequerido)
    {
        $nrequerido->delete();
        return redirect()->route('nrequerido.index')->with('status', '¡El nivel fue eliminado con éxito!');
    }
}
