<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Orcamento;
use App\Models\Diario;
use App\Models\Checklist;
use App\Models\Atividade;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'destinos'   => Destino::count(),
            'orcamentos' => Orcamento::count(),
            'diarios'    => Diario::count(),
            'checklists' => Checklist::count(),
            'atividades' => Atividade::count(),
        ]);
    }
}
