@extends('layout.layout')

@section('titulo','Actualizar paciente')
 
@section('contenido')

<h1 class="text-center">Editar paciente</h1>
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

<form action="{{route('paciente.update', $paciente->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Nombre del paciente:</label>
            <input type="text" class="form-control" name="nombre" value="{{$paciente->nombre}}">
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Cedula:</label>
        <input type="text" class="form-control" name="cedula" value="{{$paciente->cedula}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Direccion del paciente:</label>
        <input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}">
        </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>Fecha de nacimiento:</label>
        <input type="text" class="form-control" name="nacimiento" value="{{$paciente->nacimiento}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Genero:</label>
        <input type="text" class="form-control" name="genero" value="{{$paciente->genero}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Numero de registro:</label>
        <input type="number" class="form-control" name="numregistro" value="{{$paciente->numregistro}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Numero de cama:</label>
        <input type="number" class="form-control" name="numcama" value="{{$paciente->numcama}}">
        </div>
    </div>
    
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar paciente</button>
    </div>
    </form>
    <br><br>
    
    <div class="row">
       <a href=" {{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection