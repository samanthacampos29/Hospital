@extends('layout.layout')

@section('titulo')
Crear nuevo consulta
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Consulta</h1>
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

<form action="{{route('consulta.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Fecha consulta:</label>
        <input type="text" class="form-control" name="fecha" placeholder="Fecha">
        </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Paciente:</label>
        <input type="number" class="form-control" name="idpaciente" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Medico:</label>
        <input type="number" class="form-control" name="idmedico" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Consulta</button>
    </div>
    </form>
    <br><br>
    
    <div class="row">
       <a href=" {{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection