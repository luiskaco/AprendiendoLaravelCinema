<?php

namespace Cinema;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*Incorporando la clase SofDeletes: Consiste en ocultar registro de la base de datos que han sido elminado. Sin elimnarlo de la BD*/
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    /**
     parte que se rellenan
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

  /**
     Setear la clave...
   */
  
    protected $dates = ['deleted_at'];//Debe agregarse. soft delete

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
             /** atribute  es una vriable propia del modelo */
            $this->attributes['password'] = \Hash::make($valor);  // hash sirve para encriptar
        }
    }
}
