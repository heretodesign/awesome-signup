<?php

use Illuminate\Database\Seeder;

class PlanBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\PlanB::class, 10)->create();
    }
}
