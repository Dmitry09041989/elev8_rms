<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TrainingSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CustomerTrainingSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}
