@extends('layout.layout')

@section('titulo')
Crear nuevo servicio
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Servicio</h1>
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

<form action="{{route('servicio.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Fecha:</label>
        <input type="text" class="form-control" name="fecha" placeholder="Fecha">
        </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>Descripcion del servicio:</label>
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Hospital:</label>
        <input type="number" class="form-control" name="idhospital" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Laboratorio:</label>
        <input type="number" class="form-control" name="idlaboratorio" placeholder="0">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Servicio</button>
    </div>
    </form>
    <br><br>
   
    <div class="row">
       <a href=" {{route('servicio.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection