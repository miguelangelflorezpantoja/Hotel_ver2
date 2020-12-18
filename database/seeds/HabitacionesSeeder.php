<?php

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $habitacion=[ 

            [ 
                
                'descripcion'=>'cinco estrellas',
                'numCamas'=>'2',
                'foto'=>'1.jpg',
                'precio_id'=> '1',


            ],
            [ 
                
                'descripcion'=>'muy buena',
                'numCamas'=>'3',
                'foto'=>'2.jpg',
                'precio_id'=> '2',


            ],
            
            [ 
                
                'descripcion'=>'Regular consta de tantos',
                'numCamas'=>'7',
                'foto'=>'3.jpg',
                'precio_id'=> '3',


            ],
            [ 
                
                'descripcion'=>'Rcerca al mar',
                'numCamas'=>'4',
                'foto'=>'4.jpg',
                'precio_id'=> '4',


            ],
       

        ];
        DB::table('habitacion')->insert($habitacion);

    }
}
