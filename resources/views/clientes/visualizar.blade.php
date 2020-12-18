@extends('layout.master')
    @section('content')
    
<h1>Listado Clientes</h1>
<div class="container">
<div class="row">
@foreach($cliente as $p)
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src='{{url("/img/$p->foto")}}' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nombre :{{$p->nombres}}</h5>
    <p class="card-text"> ID: {{$p->id}} </p>
    <p class="card-text"> Identificacion: {{$p->DNI}} </p>
    <p class="card-text">  </p>
    <p class="card-text"> Genero {{$p->genero}} </p>
    <p class="card-text"> :Domicilio: {{$p->Domicilio}} </p>
    <p class="card-text"> :Telefono {{$p->Telefono}} </p>


    </div>
    </div>

  </div>
  @endforeach
  </div>
</div>

@stop