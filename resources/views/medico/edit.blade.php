@extends('layout.layout')

@section('titulo','Actualizar medico')
 
@section('contenido')

<h1 class="text-center">Editar medico</h1>
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

<form action="{{route('medico.update', $medico->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Nombre del medico:</label>
            <input type="text" class="form-control" name="nombre" value="{{$medico->nombre}}">
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Cedula:</label>
        <input type="number" class="form-control" name="cedula" value="{{$medico->cedula}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Especialidad:</label>
        <input type="text" class="form-control" name="especialidad" value="{{$medico->especialidad}}">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Hospital:</label>
        <input type="number" class="form-control" name="idhospital" value="{{$medico->idhospital}}">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar medico</button>
    </div>
    </form>
    <div class="row">
        <a href=" {{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
     </div>
@endsection