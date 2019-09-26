<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdminsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'amboss';
        $admin->email = 'admin@amboss.com';
        $admin->password = bcrypt('admin123');
        $admin->save();
    }
}


