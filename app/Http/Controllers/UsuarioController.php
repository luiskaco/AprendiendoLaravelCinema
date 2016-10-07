<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
//use Cinema\Http\Controllers\Controller; // agregado
/** Hacer uso del modelo */
use Cinema\User;

/*Incorporar elemento de redireccion*/
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

/*Importando el validador REQUiRES para este controlador*/
 use Cinema\Http\Requests\UserCreateRequest;    // Nombre Simbolico al realizar el make:request
 use Cinema\Http\Requests\UserUpdateRequest;

/*Importando libreria para obtener parametros de rutas, relacionada a los parametros que la ruta misma envia.*/
use Illuminate\Routing\Route;


class UsuarioController extends Controller
{    
   public function __construct(){
  /*aplicandolo a todos los controladores.*/
   $this->middleware('auth'); //Primer middleware autenticamos 
   //$this->middleware('admin',['only'=>['create','edit']]); //Segundo Middleware verificamos privilegios
  $this->middleware('admin')->only(['create','edit']);
   }

    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Mostrar Resultado
       //  $users=User::All(); // extraer todo y enviar informacion
          /*Nota:  se sustituira el $users=User::All();  para ser uso del metodo $users=User::paginate();  */    
         $users=User::paginate(2); /** Nota: Dentro del paginate(DENTRO) se especifica el numero de recursos a enviarse. */
       
           if($request->ajax()){ 
              return response()->json(view("usuario.users", compact('users'))->render());
           }


         return view("usuario.index", compact('users')); //compacta el json    
          /*Nota3: para mostrar elementos eliminados cde softdelete se usa el metodo ::onlyTrashed()->paginate()*/
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
    public function store(UserCreateRequest $request, User $user)
    /** GUARDAR */
    {   /**
        Llamar el modelo user y metodo create
     */
      /*  SE cambia 
         User::create([
        'name'=>$request['name'], haciendo referencia a lo campos del formulario    
        'email'=>$request['email'],
       'password'=>$request['password'],
       a User::create($request->all());
       */
       // 'password'=>bcrypt($request['password']), // bcrypt -> Metodo de encriptacion de laravel
        //User::create($request->all());
        $user->create($request->all());
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
    public function edit($id,User $user)
    {
        //Para Actualizar 
        //
         
        $user = $user->find($id);
        $this->notFound($user);
        /*Validams que exista*/
      /*  if(!$user){
          abort(404);
        }*/

        return view('usuario.edit', ['user'=>$user]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
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
        // Para eliminar<
            /**
             *  NOta: se procede a cambiar la funcion  User::destroy($id); (destruye el recurso) para hacer una busqueda y usar la funcion y posteriormente hacer uso del demetodo DELETE()
             */
             $user=User::find($id);
             $user->delete();
          /*Se imprime mensaje por la session*/
          Session::flash('message','Usuario se ha eliminado correctamente');
          /*Se almacena un elemento en la SESSION*/
          Session::put(['alert' => 'alert-info']);
         
         return Redirect::to('/usuario');
          // Nota: Debe incorporarse los elementos de session y redireccion en el controlador.
    }
}
