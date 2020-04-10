@extends('layout.layout')

@section('titulo')
Servicios
@endsection

@section('contenido')
<h1 class="text-center">Servicios</h1>
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
                <th>Descripcion</th>                
                <th>Acciones</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
            <tr>
                <td>{{$servicio -> fecha}}</td>
                <td>{{$servicio -> descripcion}}</td>
                <td>
                  <form action="{{route('servicio.destroy', $servicio->id)}}" method="post">
                    <a href="{{route('servicio.show', $servicio->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{route('servicio.edit', $servicio->id)}}" class="btn btn-primary">Editar</a>
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
        <a href="{{route('servicio.create')}} "><button class="btn btn-success">Crear servicio</button></a>
    </div>
    <div class="row">
        <a href=" {{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
     </div>
@endsection