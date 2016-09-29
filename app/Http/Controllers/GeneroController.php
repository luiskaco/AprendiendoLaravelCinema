<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

/*Incorporar el modelo.*/
use Cinema\Genre;

class GeneroController extends Controller
{   


     public function __construct(){
    /*aplicandolo a todos los controladores.*/
   $this->middleware('auth'); //Primer middleware autenticamos 
   //$this->middleware('admin',['only'=>['create','edit']]); //Segundo Middleware verificamos privilegios
  
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function listing(){
            // Listar todo   
        $genres = Genre::all();
            // Responder en json
        return response()->json(
               $genres->toArray() //convirtiendo en array   
            );

    }


    public function index()
    {
        return view('genero.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) /*El ajax busca en la ruta quien tiene */
    {  
        if($request->ajax()){  //verificar que es ajax
             Genre::create($request->all()); //crear el modelo
            return response()->json([
                'mensaje'=>$request->all()
            ]);
        }
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
