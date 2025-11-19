<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use App\Models\Destino;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|date',
            'descricao' => 'required',
            'foto' => 'nullable|image',
            'destino_id' => 'required|exists:destinos,id'
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('diarios', 'public');
        }

        Diario::create([
            'data' => $request->data,
            'descricao' => $request->descricao,
            'foto' => $fotoPath,
            'destino_id' => $request->destino_id
        ]);

        return redirect()
            ->route('diarios.index')
            ->with('success', 'Diário criado com sucesso!');
    }

    public function edit(Diario $diario)
    {
        $destinos = Destino::all();
        return view('diarios.edit', compact('diario', 'destinos'));
    }

    public function update(Request $request, Diario $diario)
    {
        $request->validate([
            'data' => 'required|date',
            'descricao' => 'required',
            'foto' => 'nullable|image',
            'destino_id' => 'required|exists:destinos,id'
        ]);

        if ($request->hasFile('foto')) {

            if ($diario->foto && file_exists('storage/' . $diario->foto)) {
                unlink('storage/' . $diario->foto);
            }

            $diario->foto = $request->file('foto')->store('diarios', 'public');
        }

        $diario->data = $request->data;
        $diario->descricao = $request->descricao;
        $diario->destino_id = $request->destino_id;

        $diario->save();

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
