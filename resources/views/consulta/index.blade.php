@extends('layout.layout')

@section('titulo')
Consultas
@endsection

@section('contenido')
<h1 class="text-center">Consultas</h1>
<br><br>
    @if ($message = Session::get('exito'))
        <div class="alert alert success">
        <p> {{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Fecha</th>          
                <th>Acciones</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($consultas as $consulta)
            <tr>
                <td>{{$consulta -> fecha}}</td>
                <td>
                  <form action="{{route('consulta.destroy', $consulta->id)}}" method="post">
                    <a href="{{route('consulta.show', $consulta->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{route('consulta.edit', $consulta->id)}}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
               </td>
            <tr>  
            @endforeach
        </tbody>
    </table>
    <br><br>

    <div class="row">
        <a href="{{route('consulta.create')}} "><button class="btn btn-success">Crear consulta</button></a>
    </div>
    <div class="row">
        <a href=" {{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
     </div>
    @endsection