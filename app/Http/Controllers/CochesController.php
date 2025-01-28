<?php

namespace App\Http\Controllers;
use App\Models\Coche;


use Illuminate\Http\Request;

class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Coche::query();
        $request->has ('marca');
        $marcaParaFiltrar = $request->marca;
        $request->has ('modelo');
        $modeloParaFiltrar = $request->modelo;
        $request->has ('color');
        $colorParaFiltrar = $request->color;
        $request->has ('matricula');
        $matriculaParaFiltrar = $request->matricula;
        if ($marcaParaFiltrar ) {
            $query->where('marca','like','%'.$request->marca.'%');
        }
        if ($modeloParaFiltrar ) {
            $query->where('modelo','like','%'.$request->modelo.'%');
        }
        if ($colorParaFiltrar ) {
            $query->where('color','like','%'.$request->color.'%');
        }
        if ($matriculaParaFiltrar ) {
            $query->where('matricula','like','%'.$request->matricula.'%');
        }
        $coches = $query->get();
        return view ('miscoches', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearcoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'matricula' => 'required',
        ]); 
        $coche = new Coche ($request->all());
        $coche->save();
        return redirect()->route('coches.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coche = Coche::find($id);
        return view('editarcoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coche =  Coche::findOrFail($id);
        $coche->update($request->all());
        return redirect()->route('coches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coche = Coche::find($id);
        $coche->delete();
        return redirect()->route('coches.index');
        
    }
}
