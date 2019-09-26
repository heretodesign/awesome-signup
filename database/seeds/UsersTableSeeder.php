<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'student';
        $user->email = 'student@amboss.com';
        $user->password = bcrypt('student123');
        $user->save();

        // User::truncate();
        // DB::table('role_user')->truncate();

        // $adminRole = Role::where('name', 'admin')->first();
        // $userRole = Role::where('name', 'user')->first();


        // $admin = User::create([
        // 	'name' => 'Admin',
        // 	'email' => 'admin@amboss.com',
        // 	'password' => bcrypt('admin123')
        // ]);

        // $user = User::create([
        // 	'name' => 'User',
        // 	'email' => 'student@amboss.com',
        // 	'password' => bcrypt('student123')
        // ]);

        // $admin->roles()->attach($adminRole);
        // $user->roles()->attach($userRole);

        // factory(App\User::class, 10)->create();
    }
}
