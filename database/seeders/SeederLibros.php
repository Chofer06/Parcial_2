<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederLibros extends Seeder
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
                'isbn' => '00982',
                'titulo' => 'Cien Años de Soledad',
                'precio' => '80200',
                'stock' => '100',
                'editorial' => '1',
            ],
            [
                'isbn' => '12335',
                'titulo' => '¿Quien Se Ha Llevado Mi Queso',
                'precio' => '25000',
                'stock' => '5',
                'editorial' => '3',
            ],
            [
                'isbn' => '9888',
                'titulo' => 'El Anillo',
                'precio' => '12000',
                'stock' => '20',
                'editorial' => '1',
            ],
            [
                'isbn' => '9966',
                'titulo' => 'Software III',
                'precio' => '25000',
                'stock' => '0',
                'editorial' => '1',
            ],
            [
                'isbn' => '99960',
                'titulo' => 'Harry Potter',
                'precio' => '89000',
                'stock' => '63',
                'editorial' => '2',
            ],  
        ];
        DB::table('libro')->insert($datos);
    }
}
