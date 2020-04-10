@extends('layout.layout')

@section('titulo')
Crear nuevo diagnostico
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Diagnostico</h1>
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

<form action="{{route('diagnostico.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Tipo:</label>
        <input type="text" class="form-control" name="tipo" placeholder="tipo">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Complicaciones:</label>
        <input type="text" class="form-control" name="complicaciones" placeholder="complicaciones">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Paciente:</label>
        <input type="number" class="form-control" name="idpaciente" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Diagnostico</button>
    </div>
    </form>
    <br><br>
    
    <div class="row">
       <a href=" {{route('diagnostico.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection