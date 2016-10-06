<?php

namespace Cinema\Http\Controllers;

use Cinema\Genre;
use Cinema\Http\Requests;
use Cinema\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
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
    public function index()
    {    

        $movies=Movie::Movies();
      //  return $movies;
        return view('movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
       $genres = Genre::pluck('genre','id'); //para listar
       return view('movie.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          /*  $file=$request->file();
            $nombre=$file->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($file));
*/
             Movie::create($request->all());
        
        return redirect::to('/movie/');
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

    public function edit(Movie $movie, $id)
    {    
        dd($id);
         //Para Actualizar 
        $genres = Genre::pluck('genre','id'); //para listar
        $movies = $movie->find($id);

        return view('movie.edit',['movies'=>$movies,'genres'=>$genres]);
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
