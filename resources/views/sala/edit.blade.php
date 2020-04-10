@extends('layout.layout')

@section('titulo','Actualizar sala')
 
@section('contenido')

<h1 class="text-center">Editar sala</h1>
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

<form action="{{route('sala.update', $sala->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Nombre de la sala:</label>
            <input type="text" class="form-control" name="nombre" value="{{$sala->nombre}}">
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Cantidad de camas:</label>
        <input type="number" class="form-control" name="cantcamas" value="{{$sala->direccion}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Paciente:</label>
        <input type="number" class="form-control" name="idpaciente" value="{{$sala->idpaciente}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Hospital:</label>
        <input type="number" class="form-control" name="idhospital" value="{{$sala->idhospital}}">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar sala</button>
    </div>
    </form>
    <br><br>
  
    <div class="row">
       <a href=" {{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection