<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = ["titulo", "valorEstimado", "valorGasto", "descricao"];

    public function destino()
    {
        return $this->belongsTo(Destino::class, 'id_destino');
    }
}
