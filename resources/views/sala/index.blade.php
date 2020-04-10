@extends('layout.layout')

@section('titulo')
Salas
@endsection

@section('contenido')
<h1 class="text-center">Salas</h1>
<br><br>
    @if ($message = Session::get('exito'))
        <div class="alert alert success">
        <p> {{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad Camas</th>                
                <th>Acciones</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($salas as $sala)
            <tr>
                <td>{{$sala -> nombre}}</td>
                <td>{{$sala -> cantcamas}}</td>
                <td>
                  <form action="{{route('sala.destroy', $sala->id)}}" method="post">
                    <a href="{{route('sala.show', $sala->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{route('sala.edit', $sala->id)}}" class="btn btn-primary">Editar</a>
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
        <a href="{{route('sala.create')}} "><button class="btn btn-success">Crear sala</button></a>
    </div>
    <div class="row">
        <a href=" {{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
     </div>
@endsection