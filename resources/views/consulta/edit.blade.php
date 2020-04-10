@extends('layout.layout')

@section('titulo','Actualizar consulta')
 
@section('contenido')

<h1 class="text-center">Editar consulta</h1>
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

<form action="{{route('consulta.update', $consulta->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Fecha de la consulta:</label>
            <input type="text" class="form-control" name="fecha" value="{{$consulta->fecha}}">
            </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Paciente:</label>
        <input type="number" class="form-control" name="idpaciente" value="{{$consulta->idpaciente}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Medico:</label>
        <input type="number" class="form-control" name="idhospital" value="{{$consulta->idmedico}}">
        </div>
    </div>
        <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar consulta</button>
    </div>
    </form>
    <br><br>
    
    <div class="row">
       <a href=" {{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection