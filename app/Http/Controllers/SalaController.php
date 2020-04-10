<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $salas = app\Sala::orderby('nombre', 'asc')->get();
            return view('sala.index', compact('salas'));
        }       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sala.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar que llenen todos los campos
        $request->validate([
            'nombre' => 'required',
            'cantcamas' => 'required'
        ]);
        app\Sala::create($request->all());
        return redirect()->route('sala.index')
                ->with('exito', 'Se ha creado la sala correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sala = App\Sala::findorfail($id);

        return view('sala.view', compact ('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sala = App\Sala::findorfail($id);

        return view('sala.edit', compact('sala'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'nombre' => 'required',
                'cantcamas' => 'required'
                ]);

        $sala = App\Sala::findorfail($id);

        $sala->update($request->all());

        return redirect()->route('sala.index')
                        ->with('exito','Sala modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sala = App\Sala::findorfail($id);
        $sala->delete('id');
        return redirect()->route('sala.index')
                  ->with('exito','Sala eliminada');
    }
}
