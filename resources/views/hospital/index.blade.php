@extends('layout.layout')

@section('titulo')
Hospitales
@endsection

@section('contenido')
<h1 class="text-center">Hospitales</h1>
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
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Cantidad Camas</th>                
                <th>Acciones</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($hospitales as $hospital)
            <tr>
                <td>{{$hospital -> nombre}}</td>
                <td>{{$hospital -> direccion}}</td>
                <td>{{$hospital -> telefono}}</td>
                <td>{{$hospital -> cantcamas}}</td>
                <td>
                  <form action="{{route('hospital.destroy', $hospital->id)}}" method="post">
                    <a href="{{route('hospital.show', $hospital->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{route('hospital.edit', $hospital->id)}}" class="btn btn-primary">Editar</a>
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
        <a href="{{route('hospital.create')}} "><button class="btn btn-success">Crear hospital</button></a>
    </div>
    <br><br>
   
    <div class="row">
       <a href=" {{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection