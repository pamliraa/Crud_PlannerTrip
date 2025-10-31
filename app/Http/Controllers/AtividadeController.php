<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atividades = Atividade::all();
        return view("atividades.index" , compact("atividades"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('atividades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'titulo' => 'required|string|max:255',
        'descricao' => 'required|string|max:255',
        'data' => 'required|date',
        'local' => 'required|string|max:255',
        'status' => 'required|string|max:255',
    ]);

        Atividade::create($request->all());

        return redirect()->route('atividades.index')->with('success', 'Atividade criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atividade $atividade)
    {
        return view('atividades.edit', compact('atividade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atividade $atividade)
    {
        $atividade->update($request->all());
        return redirect()->route('atividades.index')->with('success', 'Atividade atualizada com sucesso!');
    }

    public function destroy(Atividade $atividade)
    {
        $atividade->delete();
        return redirect()->route('atividades.index')->with('success', 'Atividade excluída com sucesso!');
    }
}