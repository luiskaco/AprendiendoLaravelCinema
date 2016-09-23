<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
/** Hacer uso del modelo */
use Cinema\User;

/*Incorporar elemento de redireccion*/
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

/*Importando el validador REQUiRES para este controlador*/
 use Cinema\Http\Requests\UserCreateRequest;    // Nombre Simbolico al realizar el make:request
 

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
         return view("usuario.index", compact('users')); //compacta el json    
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
    
   /*  
   Se cambia el  public function store(Request $request)  , 
   para incluir el validador 
  public function store(UserCreateRequest $request) ya creado en request
   */
    public function store(UserCreateRequest $request)
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
        /*Se almacena un elemento en la SESSION*/
        Session::put(['alert' => 'alert-success']);
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
          $user->fill($request->all()); // Seleciona y rellena la base de datos.  metodo fill :rellena
          $user->save();

          Session::flash('message','Usuario se actualizado correctamente');
          /*Se almacena un elemento en la SESSION*/
          Session::put(['alert' => 'alert-info']);
         
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
        // Para eliminar
         
          User::destroy($id);
          /*Se imprime mensaje por la session*/
          Session::flash('message','Usuario se ha eliminado correctamente');
          /*Se almacena un elemento en la SESSION*/
          Session::put(['alert' => 'alert-info']);
         
         return Redirect::to('/usuario');
          // Nota: Debe incorporarse los elementos de session y redireccion en el controlador.
    }
}
