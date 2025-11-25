<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use App\Models\Destino;
use App\Http\Requests\DiarioRequest;

class DiarioController extends Controller
{
    public function index()
    {
        $diarios = Diario::with('destino')->get();
        return view('diarios.index', compact('diarios'));
    }

    public function create()
    {
        $destinos = Destino::all();
        return view('diarios.create', compact('destinos'));
    }

    public function store(DiarioRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('diarios', 'public');
        }

        Diario::create($data);

        return redirect()
            ->route('diarios.index')
            ->with('success', 'Diário criado com sucesso!');
    }

    public function edit(Diario $diario)
    {
        $destinos = Destino::all();
        return view('diarios.edit', compact('diario', 'destinos'));
    }

    public function update(DiarioRequest $request, Diario $diario)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            if ($diario->foto && file_exists('storage/' . $diario->foto)) {
                unlink('storage/' . $diario->foto);
            }

            $data['foto'] = $request->file('foto')->store('diarios', 'public');
        }

        $diario->update($data);

        return redirect()
            ->route('diarios.index')
            ->with('success', 'Diário atualizado com sucesso!');
    }

    public function destroy(Diario $diario)
    {
        if ($diario->foto && file_exists('storage/' . $diario->foto)) {
            unlink('storage/' . $diario->foto);
        }

        $diario->delete();

        return redirect()
            ->route('diarios.index')
            ->with('success', 'Diário removido com sucesso!');
    }
}
