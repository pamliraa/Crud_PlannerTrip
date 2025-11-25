<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrcamentoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'valorEstimado' => 'required|numeric|min:0',
            'valorGasto' => 'required|numeric|min:0',
            'descricao' => 'required|string|max:255',
            'id_destino' => 'nullable|exists:destinos,id',
        ];
    }
}
