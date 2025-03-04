<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = 'Trenitalia';
            $newTrain->leaving_station = 'Milano Centrale';
            $newTrain->arriving_station = 'Roma Termini';
            $newTrain->leaving_hour = $faker->time();
            $newTrain->arriving_hour = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Z]{3}[0-9]{1}');
            $newTrain->coaches_number = $faker->randomDigitNotNull();
            $newTrain->delay = $faker->numberBetween(0, 1);
            $newTrain->delay_time = $faker->numberBetween(0, 60);
            $newTrain->canceled_train = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
