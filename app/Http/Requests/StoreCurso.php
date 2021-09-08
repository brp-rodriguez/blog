<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {                 
        return [
            'name'=>'required|max:10',
            'descripcion'=>'required|min:10',
            'categoria'=>'required',
        ];
    }

    public function attributes(){
        // Personalizacion de mensajes para enviar al front solo con los campos
        return ['name' =>'nombre del curso',];
    }

    public function messages(){
        // Personalizar TODO el mensaje
        return [
            'descripcion.required' => 'Debe ingresar una descripcion del curso',
        ]; 
    }
}
