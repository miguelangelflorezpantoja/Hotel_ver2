<?php


use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

     
        $cliente=[ 
             
            [ 
            'DNI'=>'1085320229',
            'nombres'=>'Sofia',
            'genero'=>'F',
            'Domicilio'=>'Pasto',
            'Telefono'=>'3113626',
            'foto'=>'m3.jpg',

            ],

                 
            [ 
                'DNI'=>'59793677',
                'nombres'=>'Maria Aura',
                'genero'=>'F',
                'Domicilio'=>'Ipiales',
                'Telefono'=>'31589899',
                'foto'=>'m2.jpg',
    
            ],
                     
            [ 
                'DNI'=>'12991472',
                'nombres'=>'Daniel',
                'genero'=>'M',
                'Domicilio'=>'Samaniego',
                'Telefono'=>'31356733',
                'foto'=>'h1.jpg',
    
            ],
                 
            [ 
                'DNI'=>'1085392938',
                'nombres'=>'Juan Diaz',
                'genero'=>'M',
                'Domicilio'=>'Bogotà',
                'Telefono'=>'327854434',
                'foto'=>'h2.jpg',
    
            ],
                [ 
                    'DNI'=>'10859969',
                    'nombres'=>'Carolina Florez',
                    'genero'=>'M',
                    'Domicilio'=>'Bogotà',
                    'Telefono'=>'327854434',
                    'foto'=>'m1.jpg',
        
                    ]

        ];

        DB::table('cliente')->insert($cliente);

    }
}
