<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Training;
use Illuminate\Database\Seeder;

class CustomerTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainings = Training::all();

        Customer::all()->each(function ($customer) use ($trainings){
           $customer->trainings()->attach(
               $trainings->random(1)->pluck('id')
           );
        });
    }
}
