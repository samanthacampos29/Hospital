@extends('layout.layout')

@section('titulo')
Crear nueva sala
@endsection

@section('contenido')
<h1 class="text-center">Crear Nueva Sala</h1>
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

<form action="{{route('sala.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Nombre de la sala:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>Cantidad de camas:</label>
        <input type="number" class="form-control" name="cantcamas" placeholder="0">
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
        <label>ID Hospital:</label>
        <input type="number" class="form-control" name="idhospital" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Sala</button>
    </div>
    </form>
    <br><br>
  
    <div class="row">
       <a href=" {{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection