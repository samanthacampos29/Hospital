<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $consultas = app\Consulta::orderby('fecha', 'asc')->get();
            return view('consulta.index', compact('consultas'));
        }       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consulta.insert');
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
            'fecha' => 'required',
            
        ]);
        app\Consulta::create($request->all());
        return redirect()->route('consulta.index')
                ->with('exito', 'Se ha creado la consulta correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = App\Consulta::findorfail($id);

        return view('consulta.view', compact ('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = App\Consulta::findorfail($id);

        return view('consulta.edit', compact('consulta'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'fecha' => 'required',
                
                ]);

        $consulta = App\Consulta::findorfail($id);

        $consulta->update($request->all());

        return redirect()->route('consulta.index')
                        ->with('exito','Consulta modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta = App\Consulta::findorfail($id);
        $consulta->delete('id');
        return redirect()->route('consulta.index')
                  ->with('exito','consulta eliminada');
    }
}

