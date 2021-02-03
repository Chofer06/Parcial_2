<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederEditorial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombre' => 'Norma',
                'direccion' => 'Av. El Dorado 90-10',
                'ciudad' => 'Bogota',
                'telefomo' => '426652',
            ],
            [
                'nombre' => 'Mc Graw Hill',
                'direccion' => 'Carrera 85k #46a-66',
                'ciudad' => 'Bogota',
                'telefomo' => '3102266',
            ],
            [
                'nombre' => 'Alfaomega Colombiana',
                'direccion' => 'CL. 62 ##2046',
                'ciudad' => 'Bogota',
                'telefomo' => '485210',
            ],
            [
                'nombre' => 'Los Tres Editores S.A.S',
                'direccion' => 'CL. 32 ##8a-95',
                'ciudad' => 'Cali',
                'telefomo' => '125520',
            ],
            [
                'nombre' => 'La Santillana',
                'direccion' => 'Cra. 82 #11241 N 33AA',
                'ciudad' => 'Medellin',
                'telefomo' => '700022',
            ],  
        ];
        DB::table('editorial')->insert($datos);
    }
}
