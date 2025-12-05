<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChecklistRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
            {
            return [
            'id_destino' => 'required|exists:destinos,id',
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'status' => 'required|string',
            ];
    }
}
