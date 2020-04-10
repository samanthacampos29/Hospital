@extends('layout.layout')

@section('titulo')
Crear nuevo paciente
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Paciente</h1>
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

<form action="{{route('paciente.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Nombre del paciente:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Cedula:</label>
        <input type="text" class="form-control" name="cedula" placeholder="Cedula">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Direccion del paciente:</label>
        <input type="text" class="form-control" name="direccion" placeholder="Direccion">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Fecha de nacimiento:</label>
        <input type="text" class="form-control" name="nacimiento" placeholder="Fecha de nacimiento">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Genero:</label>
        <input type="text" class="form-control" name="genero" placeholder="Genero">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Numero de registro:</label>
        <input type="number" class="form-control" name="numregistro" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Numero de cama:</label>
        <input type="number" class="form-control" name="numcama" placeholder="0">
        </div>
    </div>
    
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Paciente</button>
    </div>
    </form>
    <br><br>
    
    <div class="row">
       <a href=" {{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection