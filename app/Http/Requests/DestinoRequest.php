<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'descricao' => 'required|string|max:500',
        ];
    }
}
