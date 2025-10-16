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
        return view("destinos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Destino::create($request->all());

        return redirect()->route("destinos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Destino $destino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        $destino = Destino::findOrFail($id);
        return view("destinos.edit", compact("destino"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destino $destino)
    {
        $destino = Destino::findOrFail($id);

        $destino->update($request->all());

        return redirect()->route("destinos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destino $destino)
    {
        $destino = Destino::findOrFail($id);

        $destino->delete();

        return redirect()->back();
    }
}
