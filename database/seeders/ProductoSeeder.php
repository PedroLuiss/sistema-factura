<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{

    public function run()
    {

        $data = array(
            [
                'nombre' => 'producto 1',
                'precio' => 122,
                'impuesto' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'producto 2',
                'precio' => 100,
                'impuesto' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'producto 3',
                'precio' => 200,
                'impuesto' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'producto 4',
                'precio' => 122,
                'impuesto' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'nombre' => 'producto 5',
                'precio' => 400,
                'impuesto' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        foreach($data as $key){
            DB::table('productos')->insert($key);
         }
    }
}
