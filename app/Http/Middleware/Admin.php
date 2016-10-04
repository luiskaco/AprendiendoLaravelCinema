<?php

namespace Cinema\Http\Middleware;

use Closure;

/** Incorporar */
use Illuminate\Contracts\Auth\Guard;
use Session;



class Admin
{

        /*Uso de interface*/
         /*  protected $auth;
           function __contruct(Guard $auth){
               $this->auth = $auth;
           }

        /**
         Guard: Nos provee informacion de quien esta logueado
         */
/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
       if(\Auth::user()->id != 1){
                    Session::flash('message-error','Sin Privilegios');
                    return redirect()->to('admin');
         }
         return $next($request);
    }
}
