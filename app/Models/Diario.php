<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $fillable = [
        'data',
        'descricao',
        'foto',
        'id_destino'
    ];

        public function destino()
    {
        return $this->belongsTo(Destino::class, 'id_destino');
    }

}