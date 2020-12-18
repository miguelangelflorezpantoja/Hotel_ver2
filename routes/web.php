<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ClientesController;


Route::get('/', [HotelController::class, 'getIndex']) ;

Route::get('hotel/historia', [HotelController::class,'showHistoria']);

Route::get('hotel/ubicacion', [HotelController::class,'showUbicacion']);

Route::get('hotel/vision', [HotelController::class,'showMision']);

Route::get('servicios/habitaciones', [HabitacionesController::class,'showHabitaciones']);

Route::get('reservas', [ReservasController::class,'getReservas']);
    
Route::get('reservas', [ReservasController::class,'getReservas']);

Route::get('facturacion', [FacturacionController::class,'getFactura']);

Route::get('contactos', [HotelController::class,'showContactos']);

Route::get('clientes/visualizar', [ClientesController::class,'showClientes']);

Route::get('servicios/eventos', [HotelController::class,'showeventos']); 
       