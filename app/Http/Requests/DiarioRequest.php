<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'data' => 'required|date',
            'id_destino' => 'nullable|exists:destinos,id',
        ];
    }
}
