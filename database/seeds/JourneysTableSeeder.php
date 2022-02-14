<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Journey;

class JourneysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $new_journey = new Journey();
            $new_journey->destination = $faker->state;
            $new_journey->price = $faker->randomFloat(2, 100, 10000);
            $new_journey->start_journey_date = $faker->dateTime;
            $new_journey->end_journey_date = $faker->dateTime;
            $new_journey->destination_description = $faker->paragraph();
            $new_journey->save();
        }
    }   
}
