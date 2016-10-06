<?php

namespace Cinema\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable {
	use Queueable, SerializesModels;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	
	private $argumentos;
	public function __construct($argumentos) {
		$this->argumentos=$argumentos;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		    return $this->view('emails.welcome')
		    ->with($this->argumentos) //Pasar argumentos
			->from('luisAdmin@inameh.gob.ve', 'INAMEH')
			->subject('Bienvenido a Cinema');
	}
}
