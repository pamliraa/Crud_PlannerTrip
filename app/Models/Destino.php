<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $fillable = ["name", "descricao"];

    public function orcamentos()
    {
        return $this->hasMany(Orcamento::class, 'id_destino');
    }
}
