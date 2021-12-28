<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturaSeeder extends Seeder
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
                'id_user' => 4,
                'monto_total' => 600.00,
                'impuesto_total' => 50.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        foreach($data as $key){
            DB::table('facturas')->insert($key);
         }
    }
}
