<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJuego extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /*public function authorize(): bool
    {
        return false;
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombre" => "required|min:3|unique:juegos"
        ];
    }

    public function attributes()
    {
        return [
            "nombre" => "Nombre del juego",
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Agrege un Nombre del juego',
            'nombre.unique'=>'Este Juego esta Agregado'
        ];
    }
}
