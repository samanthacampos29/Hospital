<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $medicos = app\Medico::orderby('nombre', 'asc')->get();
            return view('medico.index', compact('medicos'));
        }       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.insert');
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
            'cedula' => 'required',
            'especialidad' => 'required'
        ]);
        app\Medico::create($request->all());
        return redirect()->route('medico.index')
                ->with('exito', 'Se ha creado el medico correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = App\Medico::findorfail($id);

        return view('medico.view', compact ('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = App\Medico::findorfail($id);

        return view('medico.edit', compact('medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'nombre' => 'required',
                'cedula' => 'required',
                'especialidad' => 'required'
                ]);

        $hospital = App\Medico::findorfail($id);

        $hospital->update($request->all());

        return redirect()->route('medico.index')
                        ->with('exito','Medico modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = App\Medico::findorfail($id);
        $medico->delete('id');
        return redirect()->route('medico.index')
                  ->with('exito','Medico eliminado');
    }
}
