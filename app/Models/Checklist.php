<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = [
        'destino_id',
        'titulo',
        'descricao',
        'concluido',
    ];

    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }
}


