<?php

use Illuminate\Database\Seeder;

class PlanDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\PlanD::class, 10)->create();
    }
}
