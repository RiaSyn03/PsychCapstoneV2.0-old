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
        $userRole = Role::where('name', 'user') -> first();
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt ('admin')
        ]);

        $councilour = User::create([
            'name' => 'Councilour',
            'email' => 'councilour@councilour.com',
            'password' => bcrypt ('councilour')
            
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt ('user')
        ]);

        $admin -> roles() -> attach($adminRole);
        $councilour->roles()->attach($councilourRole);
        $user->roles()->attach($userRole);

        factory(App\User::class, 5)->create();
    }


}
