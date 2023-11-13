<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorComics extends FormRequest
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
            //
            '_name'=>'required|min:4',
            '_fechap'=>'required|date',
            '_numc'=>'required|numeric|max:4',
        ];
    }
}