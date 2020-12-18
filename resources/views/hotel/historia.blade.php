@extends('layout.master')
    @section('content')
    <center><h1>Historia</h1> </center>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">



    <center><img src=" https://www.revistabuenviaje.com/conocemexico/viajemistico/hotel_california/leyenda_hotel_california.jpg"></center>
<h5>El origen de lo que hoy conocemos como “hoteles” data de hace más de 2.000 años. En la antigüedad, el servicio de alojamiento se consideraba una obligación social. Se acogía a aquellos viajeros procedentes de otros lugares que no tenían un espacio seguro en el que hospedarse</h5>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

@stop 