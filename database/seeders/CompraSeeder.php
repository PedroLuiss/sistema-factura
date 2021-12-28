<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CompraSeeder extends Seeder
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
                'id_producto' => 5,
                'id_user' => 2,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 2,
                'id_user' => 2,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 3,
                'id_user' => 2,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 3,
                'id_user' => 4,
                'status' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 5,
                'id_user' => 4,
                'status' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 3,
                'id_user' => 5,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 2,
                'id_user' => 5,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'id_producto' => 1,
                'id_user' => 5,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        foreach($data as $key){
            DB::table('compras')->insert($key);
         }
    }
}
