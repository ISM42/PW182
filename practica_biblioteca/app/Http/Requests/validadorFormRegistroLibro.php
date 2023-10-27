<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormRegistroLibro extends FormRequest
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
            'txtISBN' => 'required|numeric|digits:13',
            'txtTitulo' => 'required|max:100',
            'txtAutor' => 'required|min:10',
            'txtPag' => 'required|numeric',
            'txtEditorial' => 'required|min:5',
            'txtEmailEditorial' => 'required|email|min:5'
        ];

    return redirect('/registroLibro')->with('confirmacion', 'Tu información llegó al controlador');
}

    

    
}
