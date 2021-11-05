<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'Home',
        ]);
        DB::table('sections')->insert([
            'name' => 'Training',
        ]);
        DB::table('sections')->insert([
            'name' => 'About',
        ]);
    }
}
