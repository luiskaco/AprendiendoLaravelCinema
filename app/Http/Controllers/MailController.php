<?php

namespace Cinema\Http\Controllers;

use Cinema\Mail\Welcome AS WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MailController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
      
        Mail::to('luis@example.com','Probando')
       ->send(new WelcomeEmail($request->all()));
     
		   // Mail::send('emails.welcome', $request->all(), function ($msj) {
		      /*Nota: Se debe especificar una carpeta*/
			//		$msj->subject('Correo de Contacto');
			//		$msj->to('lgomez@inameh.gob.ve');
		    //		});

		Session::flash('message', 'Mensaje enviado correctamente');
		/*Se almacena un elemento en la SESSION*/
		Session::put(['success' => 'alert-success']);
		return Redirect::to('/contacto');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
