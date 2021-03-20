<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach(range(1,100) as $index){

            DB::table('usuarios')->insert([
                'nombre' => $faker->name(5),
                'email' => $faker->email(4)
            ]);

        }

        
    }
}
