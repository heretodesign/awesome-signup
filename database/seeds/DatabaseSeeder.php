<?php

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
        // $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PlanATableSeeder::class);
        $this->call(PlanBTableSeeder::class);
        $this->call(PlanCTableSeeder::class);
        $this->call(PlanDTableSeeder::class);
        $this->call(AdminsTableDataSeeder::class);
    }
}
