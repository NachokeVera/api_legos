<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'numero'=>'required|gte:0',
            'nombre'=>'required|string|min:5|max:50',
            'tema'=>'required',
            'precio'=>'required|gte:0',
            'cantidad'=>'required|gte:0',
        ];
    }
    public function messages():array
    {
        return [
            'numero.required' => 'Número del Lego requerido',
            'numero.gte' => 'El número debe ser mayor o igual a 0',
            'nombre.required' => 'Nombre requerido',
            'nombre.string' => 'El nombre debe ser una cadena de texto',
            'nombre.min' => 'El nombre debe tener al menos 5 caracteres',
            'nombre.max' => 'El nombre no debe exceder los 50 caracteres',
            'tema.required' => 'Tema requerido',
            'precio.required' => 'Precio requerido',
            'precio.gte' => 'El precio debe ser mayor o igual a 0',
            'cantidad.required' => 'Cantidad requerida',
            'cantidad.gte' => 'La cantidad debe ser mayor o igual a 0',
        ];
    }
}
