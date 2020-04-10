@extends('layout.layout')

@section('titulo')
Crear nuevo laboratorio
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Laboratorio</h1>
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

<form action="{{route('laboratorio.store')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Nombre del laboratorio:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Direccion:</label>
        <input type="text" class="form-control" name="direccion" placeholder="Direccion">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Telefono:</label>
        <input type="number" class="form-control" name="telefono" placeholder="0">
        </div>
    </div>
    
  
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Crear Laboratorio</button>
    </div>
    </form>
    <br><br>
   
    <div class="row">
       <a href=" {{route('laboratorio.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection