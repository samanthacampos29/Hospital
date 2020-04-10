@extends('layout.layout')

@section('titulo','Actualizar diagnostico')
 
@section('contenido')

<h1 class="text-center">Editar diagnostico</h1>
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

<form action="{{route('diagnostico.update', $diagnostico->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Tipo:</label>
            <input type="text" class="form-control" name="tipo" value="{{$diagnostico->tipo}}">
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Complicaciones:</label>
        <input type="text" class="form-control" name="complicaciones" value="{{$diagnostico->complicaciones}}">
        </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Paciente:</label>
        <input type="number" class="form-control" name="idpaciente" value="{{$diagnostico->idpaciente}}">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar diagnostico</button>
    </div>
    </form>
    <br><br>
    
    <div class="row">
       <a href=" {{route('diagnostico.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection