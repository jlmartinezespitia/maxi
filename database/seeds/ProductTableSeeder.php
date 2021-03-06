<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
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
               'clave' => 'AG-L1210',
               'nombre' => 'Agenda Legis 2017 Bolsillo Florencia',
               'slug' => 'AG-L1210',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L1210.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5 cm.',
               'material' => 'Forro PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda está encuadernada.',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr. Las agendas LEGIS están encuadernadas con procesos de cosido que garantizan la permanencia de las hojas a lo largo del año.',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'AG-L1230',
               'nombre' => 'Agenda Legis 2017 Bolsillo Glasé',
               'slug' => 'AG-L1230',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L1230.jpg',
               'visible' => 1,
               'colores' => 'Bitono azul con miel',
               'medidas' => '16.4 x 7.5',
               'material' => 'Forro poliuretano quemante',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'AG-L2410',
               'nombre' => 'Agenda Legis 2017 Diaria Florencia',
               'slug' => 'AG-L2410',
               'descripcion' => 'Formato página día, 13 meses, 194 páginas, papel crema de 60 gr., mensajes motivacionales.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L2410.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '14.8 x 21.5 cm.',
               'material' => 'Forro PVC',
               'status' => 'Subió de precio',
               'paginacat' => '39',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'AG-L2430',
               'nombre' => 'Agenda Legis 2017 Diaria Glasé',
               'slug' => 'AG-L2430',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L2430.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'AG-L2440',
               'nombre' => '  Agenda Legis 2017 Diaria Grid',
               'slug' => 'AG-L2440',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L2440.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'AG-L2450',
               'nombre' => 'Agenda Legis 2017 Mitla',
               'slug' => 'AG-L2450',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L2450.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'AG-L2714',
               'nombre' => 'Agenda Legis 2017 Diaria Jirafa',
               'slug' => 'AG-L2714',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'AG-L2714.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 1,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'CL-10117',
               'nombre' => 'Calculadora solar de bolsillo',
               'slug' => 'CL-10117',
               'descripcion' => 'Incluye funda de vinil',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'CL-10117.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '8.5 x 5.5 cm.',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Serigrafía.',
               'impcoment' => 'Producto con éxito de venta por muchos años ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Funciona con energía solar',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 2,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'CL-90004',
               'nombre' => 'Calculadora gigante bicolor dushana',
               'slug' => 'CL-90004',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'CL-90004.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 2,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'EN-BJ510',
               'nombre' => 'Encendedor MINI BIC',
               'slug' => 'EN-BJ510',
               'descripcion' => 'Flama ajustable',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'EN-BJ510.jpg',
               'visible' => 1,
               'colores' => 'Blanco, negro, amarillo',
               'medidas' => '6 x 2 cm.',
               'material' => 'Plástico',
               'status' => 'REMATE',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'En virtud de que la etiqueta de la NOM la trae en la cara 2 solo se puede imprimir la cara 1',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Flama ajustable',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 3,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'EN-M3LTT',
               'nombre' => 'EncendedorTokai Transparente colores surtidos',
               'slug' => 'EN-M3LTT',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'EN-M3LTT.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 3,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'DB-90160',
               'nombre' => 'Destapador de corcholatas y taparroscas.',
               'slug' => 'DB-90160',
               'descripcion' => 'Cuenta con imán al reverso',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'DB-90160.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Otros colores mínimo 20,000 piezas',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 4,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ],
            [
               'clave' => 'DB-90214',
               'nombre' => 'Destapador de plástico extra plano.',
               'slug' => 'DB-90214',
               'descripcion' => 'Formato semana a la vista, 13 meses, 160 páginas, papel crema de 60 gr.',
               'extract' => 'Formato semana a la vista',
               'imagen' => 'DB-90214.jpg',
               'visible' => 1,
               'colores' => 'Negro',
               'medidas' => '16.4 x 7.5',
               'material' => 'PVC',
               'status' => 'Subió de precio',
               'paginacat' => '36',
               'tecnicaimp' => 'Grabado a calor, serigrafía.',
               'impcoment' => 'Al ofrecer a su cliente haga énfasis en que esta agenda ',
               'empaque' => 'Granel',
               'pzasxcaja' => '120',
               'medidacaja' => '51x13x39',
               'peso100p' => '9 kg',
               'adicionales' => 'Papel clarian color beige de 60 gr.  Las agendas L...',
               'nuevo' => 1,
               'bestseller' => 1,
               'category_id' => 4,
               'flag_id' => 1,
               'brand_id' => 1,
               'created_at' => new DateTime,
               'updated_at' => new DateTime
            ]
        );
        Product::insert($data);
    }
}