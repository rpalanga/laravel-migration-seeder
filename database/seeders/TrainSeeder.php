<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
     
    public function run(Faker $faker ): void
    {
        for ($i = 0; $i < 10; $i++) {

            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departurs =  $faker->city();
            $newTrain->arrivals = $faker->city();
            $newTrain->date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->time_to_departurs = $faker->time();
            $newTrain->time_to_arrive = $faker->time();
            $newTrain->train_number = $faker->randomNumber(5);
            $newTrain->train_carriages = $faker->randomDigitNotNull();
            $newTrain->time =  $faker->boolean();
            $newTrain->canceled = $faker->boolean();
    
            
            $newTrain->save();
        }

    }
}
