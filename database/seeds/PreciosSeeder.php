<?php

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

          $precio=[ 

            [ 
                
                'descripcion'=>'Suite',
                'precio'=>'50000',


            ],
            [ 
             
                'descripcion'=>'Matrimonia',
                'precio'=>'90000',


            ],
            [ 
             
                'descripcion'=>'Doble',
                'precio'=>'150000',


            ],
            [ 
              
                'descripcion'=>'Sencilla',
                'precio'=>'150000',


            ]
            
            ];
            DB::table('precio')->insert($precio);



    }
}
