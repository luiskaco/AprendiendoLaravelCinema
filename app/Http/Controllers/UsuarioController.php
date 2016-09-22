<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;

use cinema\Http\Requests;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar Resultado
         $users=\cinema\User::All(); // extraer todo y enviar informacion
         
         return view("usuario.index", compact('users'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    /** GUARDAR */
    {   /**
        Llamar el modelo user y metodo create
     */
        \cinema\User::create([
        'name'=>$request['name'], /** haciendo referencia a lo campos del formulario */    
        'email'=>$request['email'],
        'password'=>bcrypt($request['password']), // bcrypt -> Metodo de encriptacion de laravel
        ]);
        return redirect('/usuario')->with('message','store'); /** Redireccionando y creando un mensaje para el guardado*/
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
