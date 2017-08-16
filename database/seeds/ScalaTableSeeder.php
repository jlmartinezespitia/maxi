<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Scala;

class ScalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
             [
               'escala' => '20',
               'precio' => '70.62',
               'precioimp' => '30',
               'product_id' => 1
            ],
            [
               'escala' => '50',
               'precio' => '66',
               'precioimp' => '17.5',
               'product_id' => 1
            ],
            [
               'escala' => '100',
               'precio' => '62.26',
               'precioimp' => '12.62',
               'product_id' => 1
            ],
            [
               'escala' => '500',
               'precio' => '58.74',
               'precioimp' => '5.95',
               'product_id' => 1
            ],//
            [
               'escala' => '20',
               'precio' => '70.62',
               'precioimp' => '30',
               'product_id' => 2
            ],
            [
               'escala' => '50',
               'precio' => '66',
               'precioimp' => '17.5',
               'product_id' => 2
            ],
            [
               'escala' => '100',
               'precio' => '68.39',
               'precioimp' => '12.62',
               'product_id' => 2
            ],
            [
               'escala' => '500',
               'precio' => '64.52',
               'precioimp' => '5.95',
               'product_id' => 2
            ]
        );
        Scala::insert($data);//
    }
}
