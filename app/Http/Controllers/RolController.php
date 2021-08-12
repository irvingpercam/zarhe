<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRolRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roles.index', [
            'roles' => Rol::orderBy('Nombre', 'ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create', [
            'rol' => new Rol
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRolRequest $request)
    {
        $Name = request('Nombre');
        $Name = preg_replace('/[\s_]/', '-', $Name);
        Rol::create([
            'Nombre' => request('Nombre'),
            'url' => strtolower($Name),
        ]);
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        return view('roles.show', [
            'rol' => $rol
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        return view('roles.edit', [
            'rol' => $rol
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Rol $rol, CreateRolRequest $request)
    {
        $Name = request('Nombre');
        $Name = preg_replace('/[\s_]/', '-', $Name);
        $rol->update($request->validated());
        $rol->update(array('url' => strtolower($Name)));
        return redirect()->route('roles.show', $rol)->with('status', '¡El rol fue actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('roles.index')->with('status', '¡El rol fue eliminado con éxito!');
    }
}
