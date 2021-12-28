<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
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
                'name' => 'Pedro',
                'apellido' => 'Rodriguez',
                'email' => 'pedro@gmail.com',
                'password' => bcrypt('12345678'),
                'rol' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Nancy',
                'apellido' => 'Palma',
                'email' => 'nancy@gmail.com',
                'password' => bcrypt('12345678'),
                'rol' => 'cliente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Aura',
                'apellido' => 'Rojas',
                'email' => 'aura@gmail.com',
                'password' => bcrypt('12345678'),
                'rol' => 'cliente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Dios',
                'apellido' => 'Jerusalen',
                'email' => 'Dios@gmail.com',
                'password' => bcrypt('12345678'),
                'rol' => 'cliente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Richar',
                'apellido' => 'Martinez',
                'email' => 'Richar@gmail.com',
                'password' => bcrypt('12345678'),
                'rol' => 'cliente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Jose',
                'apellido' => 'Gonzales',
                'email' => 'Jose@gmail.com',
                'password' => bcrypt('12345678'),
                'rol' => 'cliente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        foreach ($data as $key) {
            DB::table('users')->insert($key);
        }

    }
}
