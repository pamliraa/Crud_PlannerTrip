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
            'valorEstimado' => 'required|numeric|min:0',
            'valorGasto' => 'required|numeric|min:0',
            'descricao' => 'string|max:255',
            'id_destino' => 'exists:destinos,id',
        ];
    }
}
