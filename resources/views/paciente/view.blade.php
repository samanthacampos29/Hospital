@extends('layout.layout')

@section('titulo')
    Detalle Paciente
@endsection

@section('contenido')
    <h1 class="text-center">Detalle de Paciente</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$paciente->nombre}}</p>
        </div>
    </div>
<br>
<div class="row">
    <div class="col-sm-3">
        <h3>Cedula: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$paciente->cedula}}</p>
    </div>
        
</div>
<br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Direccion: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$paciente->direccion}}</p>
        </div>
            
    </div>
<br>
       <div class="row">
        <div class="col-sm-3">
            <h3>Fecha de nacimiento: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$paciente->nacimiento}}</p>
        </div>            
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Genero </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$paciente->genero}}</p>
        </div>            
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Numero de registro: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$paciente->numregistro}}</p>
        </div>            
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Numero de cama: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$paciente->numcama}}</p>
        </div>            
    </div>
  <br><br>
    
    <div class="row">
       <a href=" {{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection