<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests;
/** Hacer uso del modelo */
use cinema\User;
/*Incorporar elemento de redireccion*/

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


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
         $users=User::All(); // extraer todo y enviar informacion
         
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
        User::create([
        'name'=>$request['name'], /** haciendo referencia a lo campos del formulario */    
        'email'=>$request['email'],
       'password'=>$request['password'],
       // 'password'=>bcrypt($request['password']), // bcrypt -> Metodo de encriptacion de laravel
        ]);
        Session::flash('message','Usuario creado correctamente');
        return Redirect::to('/usuario');
        //return redirect('/usuario')->with('message','store'); /** Redireccionando y creando un mensaje para el guardado*/
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
        //Para Actualizar 
        $user = User::find($id);
        return view('usuario.edit', ['user'=>$user]);
        
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
        $user=User::find($id);
        $user->fill($request->all()); //seleciona y rellena todas las columnas del modelo
        $user->save();

         /*
          Nota: La variable session nos permite almacenar informacion de los usuarios.
          */
         Session::flash('message','Usuario Editado correctamente');
         
         return Redirect::to('/usuario');

         // Nota: Debe incorporarse los elementos de session y redireccion en el controlador.
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
