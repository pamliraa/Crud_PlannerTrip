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
            'item' => 'required|string|max:255',
            'feito' => 'nullable|boolean',
            'id_destino' => 'nullable|exists:destinos,id',
        ];
    }
}
