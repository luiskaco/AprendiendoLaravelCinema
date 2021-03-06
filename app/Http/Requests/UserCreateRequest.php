<?php

namespace Cinema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;     // Nota: Los request deben autorizarse, para ello se cambia el estado FALSE a TRUE. Sino se mostrara un mensaje de 'forbidden '
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {            
        return [
            // Creamos las reglas para validar 
            'name'=>'required',
            'email'=>'required|unique:users',   // Se le indica que es unico en la tabla users
            'password'=>'required',
        ];
    }
}
