<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = ["titulo", "valorEstimado", "valorGasto", "descricao"];
}
