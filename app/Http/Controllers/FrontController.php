<?php

namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Movie;
use Illuminate\Http\Request;




class FrontController extends Controller
{      

    public function __construct()
    {

         /*Middleware: Nios provee de mecasnismo conveniente para filtrar las peticiones php que entran al servidor. */
         /*Un middleware de autenticacion*/
        
        $this->middleware('auth')->only('admin'); 
         // nota: si se deja esta $this->middlerware('auth')  linea se aplica  todo el controlador.
         }
   /** Nota practica - Declarar los middlerware desde el controlador. */
  /*Nota: Revisar carpeta exceptions para el redireccionamiento de midddler aut*/
     
        
      
            
   public function index()
    {
         return view('index');
    }

      public function contacto()
    {
         return view('contacto');
    }

      public function reviews()
    {     
        $movies=Movie::Movies();
        return view('reviews', compact('movies'));
    }
      public function admin()
    {
         return view('admin.index');
    }
}
