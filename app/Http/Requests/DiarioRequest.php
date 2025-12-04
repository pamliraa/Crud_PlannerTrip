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
           'id_destino' => 'required|exists:destinos,id',
            'data'       => 'required|date',
            'descricao'  => 'required|string',
            'foto'       => 'nullable|image|max:4096',
            ];
    }
}
