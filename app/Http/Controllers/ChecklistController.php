<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Destino;
use App\Http\Requests\ChecklistRequest;

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

    public function store(ChecklistRequest $request)
    {
        Checklist::create($request->validated());

        return redirect()
            ->route('checklists.index')
            ->with('success', 'Item adicionado ao checklist com sucesso!');
    }

    public function edit(Checklist $checklist)
    {
        $destinos = Destino::all();
        return view('checklists.edit', compact('checklist', 'destinos'));
    }

    public function update(ChecklistRequest $request, Checklist $checklist)
    {
        $checklist->update($request->validated());

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
