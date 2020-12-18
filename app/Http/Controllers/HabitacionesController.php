<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HabitacionesController extends Controller
{
    //


    public function showHabitaciones(){


        $habitacion=DB::table('habitacion as  hab')
        ->join('precio as pre','hab.precio_id','=','pre.id')
        ->select('hab.Numero','hab.descripcion','hab.numCamas','hab.foto','pre.precio','pre.descripcion')
        ->get();
        return view("servicios.habitaciones",  ['habitacion'=>$habitacion ]);

    



    }

    

   




}
