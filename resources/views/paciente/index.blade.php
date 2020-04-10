@extends('layout.layout')

@section('titulo')
Pacientes
@endsection

@section('contenido')
<h1 class="text-center">Pacientes</h1>
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
                <th>Cedula</th>
                <th>Direccion</th>
                <th>Fecha de nacimiento</th>                
                <th>Genero</th>                
                <th>Numero de registro</th>                
                <th>Numero de cama</th>                
                <th>Acciones</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{$paciente -> nombre}}</td>
                <td>{{$paciente -> cedula}}</td>
                <td>{{$paciente -> direccion}}</td>
                <td>{{$paciente -> nacimiento}}</td>
                <td>{{$paciente -> genero}}</td>
                <td>{{$paciente -> numregistro}}</td>
                <td>{{$paciente -> numcama}}</td>
                <td>
                  <form action="{{route('paciente.destroy', $paciente->id)}}" method="post">
                    <a href="{{route('paciente.show', $paciente->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{route('paciente.edit', $paciente->id)}}" class="btn btn-primary">Editar</a>
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
        <a href="{{route('paciente.create')}} "><button class="btn btn-success">Crear paciente</button></a>
    </div>
    <div class="row">
        <a href=" {{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
     </div>
@endsection