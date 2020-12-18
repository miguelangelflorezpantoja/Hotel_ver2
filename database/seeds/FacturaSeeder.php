<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        $factura=[ 

            [ 
                
                'Numero'=>'1',
               'cliente'=>'1',
                'formaPago'=>'1',
                'Entrada'=>'2020-02-2 10:08:10',
                 'Salida'=>'2020-02-2 10:08:8',
                 'Total'=>'6',
                 
            ],
            [ 
                
                'Numero'=>'2',
               'cliente'=>'2',
                'formaPago'=>'2',
                'Entrada'=>'2020-02-2 10:08:10',
                 'Salida'=>'2020-02-2 10:08:8',
                 'Total'=>'5',
                 
            ],
            [ 
                
                'Numero'=>'3',
               'cliente'=>'3',
                'formaPago'=>'3',
                'Entrada'=>'2020-02-2 10:08:10',
                 'Salida'=>'2020-02-2 10:08:8',
                 'Total'=>'8',
                 
            ],
            [ 
                
                'Numero'=>'1',
               'cliente'=>'1',
                'formaPago'=>'4',
                'Entrada'=>'2020-02-2 10:08:10',
                 'Salida'=>'2020-02-2 10:08:8',
                 'Total'=>'2',
                 
            ],
         
        ];

        DB::table('factura')->insert($factura);
    }
}
