<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ClientesController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

          
       