@extends('layout.master')
    @section('content')


<h1>Listado Habitaciones</h1>
<div class="container">
<div class="row">
@foreach($habitacion as $p)
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src='{{url("/img1/$p->foto")}}' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tipo: {{$p->descripcion}}</h5>
    <p class="card-text"> Numero:{{$p->Numero}} </p>
    <p class="card-text"> Numero de camas:{{$p->numCamas}} </p>
    <p class="card-text"> Precio:{{$p->precio}} </p>


    </div>
    </div>

  </div>
  @endforeach
  </div>
</div>






@stop