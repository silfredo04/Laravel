<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // obtenemos todo lo del modelo 
        $usuarios=Usuario::all();

        // mostramos nuestro index pasando todos los datos del modelo con la variable usuarios
        return view('usuario.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mostramos la vista crear
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario(); // se instancia una clase

        // obtenemos todos los valores del formulario 
        $usuarios->nombre = $request->get('nombre'); 
        $usuarios->correo = $request->get('correo');
        $usuarios->contraseña = $request->get('contraseña');

        // guardamos toda la data 
        $usuarios->save();

        // redireccionamos a usuarios
        return redirect('/usuarios');


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
        $usuario = Usuario::find($id);

        return view('usuario.edit')->with('usuario',$usuario);
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
         $usuario = Usuario::find($id);

        // obtenemos todos los valores del formulario 
        $usuario->nombre = $request->get('nombre'); 
        $usuario->correo = $request->get('correo');
        $usuario->contraseña = $request->get('contraseña');

        // guardamos toda la data 
        $usuario->save();

        // redireccionamos a usuarios
        return redirect('/usuarios');
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
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
