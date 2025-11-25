<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Http\Requests\AtividadeRequest;

class AtividadeController extends Controller
{
    public function index()
    {
        $atividades = Atividade::all();
        return view("atividades.index", compact("atividades"));
    }

    public function create()
    {
        return view('atividades.create');
    }

    public function store(AtividadeRequest $request)
    {
        Atividade::create($request->validated());

        return redirect()
            ->route('atividades.index')
            ->with('success', 'Atividade criada com sucesso!');
    }

    public function edit(Atividade $atividade)
    {
        return view('atividades.edit', compact('atividade'));
    }

    public function update(AtividadeRequest $request, Atividade $atividade)
    {
        $atividade->update($request->validated());

        return redirect()
            ->route('atividades.index')
            ->with('success', 'Atividade atualizada com sucesso!');
    }

    public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        return redirect()
            ->route('atividades.index')
            ->with('success', 'Atividade excluída com sucesso!');
    }
}
