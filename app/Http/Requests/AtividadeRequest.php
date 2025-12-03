<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:500',
            'data' => 'required|date',
            'local' => 'string|max:255',
            'status' => 'string|max:255',
            'id_destino' => 'nullable|exists:destinos,id',
        ];
    }
}
