<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\Destino;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
   
     public function index()
    {
        $orcamentos = Orcamento::all();
        return view("orcamentos.index" , compact("orcamentos"));
    }

    public function create()
    {
        $destinos = Destino::all();
        return view('orcamentos.create', compact('destinos'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'titulo' => 'required|string|max:255',
        'valorEstimado' => 'required|numeric',
        'valorGasto' => 'required|numeric',
        'descricao' => 'required|string|max:255',
        'id_destino' => 'nullable|exists:destinos,id',
    ]);

        Orcamento::create($request->all());

        return redirect()->route('orcamentos.index')->with('success', 'Orçamento criada com sucesso!');
    }

    public function edit(Orcamento $orcamento)
    {
        return view('orcamentos.edit', compact('orcamento'));
    }

    public function update(Request $request, Orcamento $orcamento)
    {
        $orcamento->update($request->all());
        return redirect()->route('orcamentos.index')->with('success', 'Orçamento atualizada com sucesso!');
    }

    public function destroy(Orcamento $orcamento)
    {
        $orcamento->delete();
        return redirect()->route('orcamentos.index')->with('success', 'Orçamento excluída com sucesso!');
    }
}