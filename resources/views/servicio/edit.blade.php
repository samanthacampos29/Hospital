@extends('layout.layout')

@section('titulo','Actualizar servicio')
 
@section('contenido')

<h1 class="text-center">Editar servicio</h1>
<br><br>

@if($errors->any())
	<div class="alert alert-danger">
	<div class="header"> <strong>Ups.</strong> Algo anda mal</div>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
	</div>
	
@endif

<form action="{{route('servicio.update', $servicio->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Fecha:</label>
            <input type="text" class="form-control" name="fecha" value="{{$servicio->fecha}}">
            </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>Descripcion servicio:</label>
        <input type="text" class="form-control" name="descripcion" value="{{$servicio->descripcion}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Hospital:</label>
        <input type="number" class="form-control" name="idhospital" value="{{$servicio->idhospital}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Laboratorio:</label>
        <input type="number" class="form-control" name="idlaboratorio" value="{{$servicio->idlaboratorio}}">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar servicio</button>
    </div>
    </form>
    <br><br>
   
    <div class="row">
       <a href=" {{route('servicio.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection