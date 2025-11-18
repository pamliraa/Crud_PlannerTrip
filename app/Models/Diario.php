<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $fillable = [
        'data',
        'descricao',
        'foto',
        'destino_id'
    ];

    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }
}
