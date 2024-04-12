<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactanos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     
    public function authorize(): bool
    {
        return false;
    }
    */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "Nombre" => "required|min:3",
            "Correo" => "required|email",
            "Mensaje" => "required|min:20"
        ];
    }

    public function messages()
    {
        return [
            'nombre.min'=>'Agrege su nombre',
            'nombre.required'=>'Agrege su nombre',
            'Correo.required'=>'Agrege su correo',
            'Correo.email'=>'Este correo es invalido',
            'Mensaje.required'=>'Agrege mensaje',
            'Mensaje.min'=>'El Mensaje es muy corto',
            
        ];
    }
}
