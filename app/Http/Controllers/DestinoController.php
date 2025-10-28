<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Destino::all();
        return view("destinos.index" , compact("destinos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'descricao' => 'required|string|max:255',]);

        Destino::create($request->all());

        return redirect()->route('destinos.index')->with('success', 'Destino criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        return view('destinos.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destino $destino)
    {
        $destino->update($request->all());
        return redirect()->route('destinos.index')->with('success', 'Destino atualizado com sucesso!');
    }

    public function destroy(Destino $destino)
    {
        $destino->delete();
        return redirect()->route('destinos.index')->with('success', 'Destino excluído com sucesso!');
    }
}