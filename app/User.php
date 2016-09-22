<?php

namespace cinema;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
             /** atribute  es una vriable propia del modelo */
            $this->attributes['password'] = \Hash::make($valor);  // hasj sirve para encriptar
        }
    }
}
