@extends('layout.layout')

@section('titulo')
Crear nuevo medico
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Medico</h1>
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

<form action="{{route('medico.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Nombre del medico:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Cedula:</label>
        <input type="number" class="form-control" name="cedula" placeholder="Cedula">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Especialidad:</label>
        <input type="text" class="form-control" name="especialidad" placeholder="Especialidad">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Hospital:</label>
        <input type="number" class="form-control" name="idhospital" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Medico</button>
    </div>
    </form>
    <div class="row">
        <a href=" {{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
     </div>
@endsection