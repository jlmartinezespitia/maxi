<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Zone;


class ZoneTableSeeder extends Seeder
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
               'zona' => 'Cubierta exterior',
               'area' => '7.0 X 3.0',
               'product_id' => 1
            ],
            [
               'zona' => 'Personalización',
               'area' => 'Lista de precios L2',
               'product_id' => 1
            ],
            [
               'zona' => 'Hoja guarda en offset digital (encarte) máximo 3 hojas. Solicitar cotización',
               'area' => 'Totalidad de hoja guarda mediante inserto',
               'product_id' => 1
            ],
            [
               'zona' => 'Cubierta exterior2',
               'area' => '7.0 X 3.0',
               'product_id' => 2
            ],
            [
               'zona' => 'Personalización2',
               'area' => 'Lista de precios L2',
               'product_id' => 2
            ],
            [
               'zona' => 'Hoja guarda en offset digital (encarte) máximo 3 hojas. Solicitar cotización2',
               'area' => 'Totalidad de hoja guarda mediante inserto',
               'product_id' => 2
            ]
      );
        Zone::insert($data);
    }
}
