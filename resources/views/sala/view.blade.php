@extends('layout.layout')

@section('titulo')
    Detalle Sala
@endsection

@section('contenido')
    <h1 class="text-center">Detalle de Sala</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$sala->nombre}}</p>
        </div>
    </div>
<br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Cantidad de camas: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$sala->cantcamas}}</p>
        </div>            
    </div>
  <br><br>
  
    <div class="row">
       <a href=" {{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection