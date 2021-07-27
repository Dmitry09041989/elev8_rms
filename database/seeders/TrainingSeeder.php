<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Training::factory()->times(1)->create();

        DB::table('trainings')->insert([
            'name' => 'Personal',
        ]);

        DB::table('trainings')->insert([
            'name' => 'Group',
        ]);
    }
}
