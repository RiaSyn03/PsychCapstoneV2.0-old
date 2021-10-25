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
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin') -> first();
        $councilourRole = Role::where('name', 'councilour') -> first();
        $studentRole = Role::where('name', 'student') -> first();
        $userRole = Role::where('name', 'user') -> first();
        
        $admin = User::create([
            'idnum' => '11111111',
            'fname' => 'Admin',
            'mname' => 'Ad',
            'lname' => 'Admin',
            'course' => 'admin',
            'year' => '5',
            'email' => 'admin@admin.com',
            'password' => bcrypt ('admin')
        ]);

        $councilour = User::create([
            'idnum' => '22222222',
            'fname' => 'Councilour',
            'mname' => 'Co',
            'lname' => 'Councilour',
            'course' => 'councilour',
            'year' => '5',
            'email' => 'councilour@councilour.com',
            'password' => bcrypt ('councilour')
            
        ]);

        $student = User::create([
            'idnum' => '33333333',
            'fname' => 'Student',
            'mname' => 'St',
            'lname' => 'Student',
            'course' => 'student',
            'year' => '5',
            'email' => 'student@student.com',
            'password' => bcrypt ('student')
        ]);

        $user = User::create([
            'idnum' => '44444444',
            'fname' => 'User',
            'mname' => 'Us',
            'lname' => 'User',
            'course' => 'user',
            'year' => '5',
            'email' => 'user@user.com',
            'password' => bcrypt ('user')
        ]);

        $admin -> roles() -> attach($adminRole);
        $councilour->roles()->attach($councilourRole);
        $student->roles()->attach($studentRole);
        $user->roles()->attach($userRole);

        factory(App\User::class, 5)->create();
    }


}
