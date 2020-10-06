<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Auto;


class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Auto::create([
                'modelo' => $faker->sentence,
                'marca' => $faker->sentence,
                'tipo' => $faker->sentence,
            ]);  
        }
    }
}
