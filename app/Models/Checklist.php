<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = [
        'id_destino',
        'titulo',
        'descricao',
        'status',
    ];

    public function destino()
    {
        return $this->belongsTo(Destino::class, 'id_destino');
    }
}
