<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\Destino;
use App\Http\Requests\OrcamentoRequest;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::all();
        return view("orcamentos.index", compact("orcamentos"));
    }

    public function create()
    {
        $destinos = Destino::all();
        return view('orcamentos.create', compact('destinos'));
    }

    public function store(OrcamentoRequest $request)
    {
        Orcamento::create($request->validated());

        return redirect()->route('orcamentos.index')
            ->with('success', 'Orçamento criado com sucesso!');
    }

    public function edit(Orcamento $orcamento)
    {
        $destinos = Destino::all();
        return view('orcamentos.edit', compact('orcamento', 'destinos'));
    }

    public function update(OrcamentoRequest $request, Orcamento $orcamento)
    {
        $orcamento->update($request->validated());

        return redirect()->route('orcamentos.index')
            ->with('success', 'Orçamento atualizado com sucesso!');
    }

    public function destroy(Orcamento $orcamento)
    {
        $orcamento->delete();

        return redirect()->route('orcamentos.index')
            ->with('success', 'Orçamento excluído com sucesso!');
    }
}
