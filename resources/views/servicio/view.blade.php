@extends('layout.layout')

@section('titulo')
    Detalle Servicio
@endsection

@section('contenido')
    <h1 class="text-center">Detalle de Servicio</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Fecha: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$servicio->fecha}}</p>
        </div>
    </div>
<br>
      <div class="row">
        <div class="col-sm-3">
            <h3>Descripcion: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$servicio->descripcion}}</p>
        </div>            
    </div>
  <br><br>
   
    <div class="row">
       <a href=" {{route('servicio.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection