<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class formaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $dato=[ 

            [ 
                
                'descripcion'=>'Efectivo',
                


            ],


            [ 
                
                'descripcion'=>'Tarjeta Debito',
                


            ],
            [ 
                
                'descripcion'=>'arjeta credito',
                


            ],
            [ 
                
                'descripcion'=>'Efectivo',
                


            ],
        ];
        DB::table('formaPago')->insert($dato);
    }
}
