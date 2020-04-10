<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $servicios = app\Servicio::orderby('fecha', 'asc')->get();
            return view('servicio.index', compact('servicios'));
        }       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.insert');
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
            'descripcion' => 'required'
             ]);
        app\Servicio::create($request->all());
        return redirect()->route('servicio.index')
                ->with('exito', 'Se ha creado el servicio correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = App\Servicio::findorfail($id);

        return view('servicio.view', compact ('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = App\Servicio::findorfail($id);

        return view('servicio.edit', compact('servicio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'fecha' => 'required',
            'descripcion' => 'required'
                ]);

        $servicio = App\Servicio::findorfail($id);

        $servicio->update($request->all());

        return redirect()->route('servicio.index')
                        ->with('exito','Servicio modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = App\Servicio::findorfail($id);
        $servicio->delete('id');
        return redirect()->route('servicio.index')
                  ->with('exito','Servicio eliminado');
    }
}