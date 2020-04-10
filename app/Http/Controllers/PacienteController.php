<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $pacientes = app\Paciente::orderby('nombre', 'asc')->get();
            return view('paciente.index', compact('pacientes'));
        }       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.insert');
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
            'direccion' => 'required',
            'nacimiento' => 'required',
            'genero' => 'required',
            'numregistro' => 'required',
            'numcama' => 'required'
        ]);
        app\Paciente::create($request->all());
        return redirect()->route('paciente.index')
                ->with('exito', 'Se ha creado el paciente correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = App\Paciente::findorfail($id);

        return view('paciente.view', compact ('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = App\Paciente::findorfail($id);

        return view('paciente.edit', compact('paciente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'nombre' => 'required',
                'cedula' => 'required',
                'direccion' => 'required',
                'nacimiento' => 'required',
                'genero' => 'required',
                'numregistro' => 'required',
                'numcama' => 'required'
                ]);

        $paciente = App\Paciente::findorfail($id);

        $paciente->update($request->all());

        return redirect()->route('paciente.index')
                        ->with('exito','Paciente modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = App\Paciente::findorfail($id);
        $paciente->delete('id');
        return redirect()->route('paciente.index')
                  ->with('exito','Paciente eliminado');
    }
}
