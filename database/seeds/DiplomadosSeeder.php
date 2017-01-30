<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DiplomadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker::create();
            DB::table('Diplomados')->insert(array(
                'idDiplomado' => $faker->numberBetween($min = 17, $max = 1000),
                'nombreDiplomado' => $faker->word,
                'descripcion' => $faker->word));
        }
    }
}