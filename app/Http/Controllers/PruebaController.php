<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;

use cinema\Http\Requests;

class PruebaController extends Controller
{
   
       	public function index()
       	{
       		return "Hola desde el controlador";
       	}
       	 	public function nombre($nombre)
       	{
       		return "Hola desde el controlador nombre, este es su nombre  ".$nombre;
       	}
       
}
