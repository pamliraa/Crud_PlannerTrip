<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Destino;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    public function index()
    {
        $checklists = Checklist::with('destino')->get();
        return view('checklists.index', compact('checklists'));
    }

    public function create()
    {
        $destinos = Destino::all();
        return view('checklists.create', compact('destinos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'destino_id' => 'required|exists:destinos,id',
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'concluido' => 'nullable|boolean',
        ]);

        Checklist::create([
            'destino_id' => $request->destino_id,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluido' => $request->concluido ?? 0,
        ]);

        return redirect()
            ->route('checklists.index')
            ->with('success', 'Item adicionado ao checklist com sucesso!');
    }

    public function edit(Checklist $checklist)
    {
        $destinos = Destino::all();
        return view('checklists.edit', compact('checklist', 'destinos'));
    }

    public function update(Request $request, Checklist $checklist)
    {
        $request->validate([
            'destino_id' => 'required|exists:destinos,id',
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'concluido' => 'nullable|boolean',
        ]);

        $checklist->update([
            'destino_id' => $request->destino_id,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluido' => $request->concluido ?? 0,
        ]);

        return redirect()
            ->route('checklists.index')
            ->with('success', 'Item atualizado com sucesso!');
    }

    public function destroy(Checklist $checklist)
    {
        $checklist->delete();

        return redirect()
            ->route('checklists.index')
            ->with('success', 'Item removido com sucesso!');
    }
}
