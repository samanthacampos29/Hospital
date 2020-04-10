@extends('layout.layout')

@section('titulo')
    Detalle Consulta
@endsection

@section('contenido')
    <h1 class="text-center">Detalle de Consulta</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Fecha: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$consulta->fecha}}</p>
        </div>
    </div>
<br>
    
  <br><br>
    
    <div class="row">
       <a href=" {{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection