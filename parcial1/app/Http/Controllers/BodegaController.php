<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // obtenemos todo lo del modelo
        $bodegas=Bodega::all();

        // mostramos nuestro index pasando todos los datos del modelo con la variable bodegas
        return view('bodega.index')->with('bodegas',$bodegas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mostramos la vista crear
        return view('bodega.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodegas = new Bodega(); // se instancia una clase

        // obtenemos todos los valores del formulario 
        $bodegas->nombre_producto = $request->get('nombrep'); 
        $bodegas->codigo = $request->get('codigo');
        $bodegas->numero_cajas = $request->get('numeroc');

        // guardamos toda la data 
        $bodegas->save();

        // redireccionamos a usuarios
        return redirect('/bodegas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // de esta manera se obtiene un usuario por el id 
        $bodega = Bodega::find($id);

        return view('bodega.edit')->with('bodega',$bodega);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // de esta manera se obtiene un usuario por el id 
        $bodega = Bodega::find($id);

        // obtenemos todos los valores del formulario 
        $bodega->nombre_producto = $request->get('nombrep'); 
        $bodega->codigo = $request->get('codigo');
        $bodega->numero_cajas = $request->get('numeroc');

        // guardamos toda la data 
        $bodega->save();

        // redireccionamos a usuarios
        return redirect('/bodegas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // de esta manera se obtiene un usuario por el id 
        $bodega = Bodega::find($id);
        $bodega->delete();
        return redirect('/bodegas');
    }
}
