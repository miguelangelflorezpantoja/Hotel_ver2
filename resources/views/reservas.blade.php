@extends('layout.master')
    @section('content')
<center><h1>Reserva a qui tu habitacion !!!!</h1></center>
<div class="mb-3">
<center><label for="exampleFormControlInput1" class="">Correo electronico</label></center>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
<center> <label for="exampleFormControlInput1" class="">Clave</label></center> 
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="mb-3">
<center>  <label for="exampleFormControlTextarea1" class="form-label">Observaciones</label></center> 
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<center> <button type="button" class="btn btn-primary btn-lg">Entrar</button></center> 
@stop