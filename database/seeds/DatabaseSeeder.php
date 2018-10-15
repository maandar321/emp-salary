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
        \App\User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'casual_leave'=>'7',
            'medical_leave'=>'7',
            'role_id'=>1
        ]);

        \App\User::create([
            'name' => 'project manager',
            'email'=> 'manager@manager.com',
            'password' => bcrypt('manager'),
            'casual_leave'=>'7',
            'medical_leave'=>'7',
            'role_id'=>2
        ]);

        \App\User::create([
            'name' => 'team lead',
            'email'=> 'teamlead@teamlead.com',
            'password' => bcrypt('teamlead'),
            'casual_leave'=>'7',
            'medical_leave'=>'7',
            'role_id'=>3
        ]);

        \App\User::create([
            'name' => 'super admin',
            'email'=> 'superadmin@superadmin.com',
            'password' => bcrypt('superadmin'),
            'casual_leave'=>'7',
            'medical_leave'=>'7',
            'role_id'=>5
        ]);

        \App\Role::create(['name'=>'Admin']);
        \App\Role::create(['name'=>'Project Manager']);
        \App\Role::create(['name'=>'Team Lead']);
        \App\Role::create(['name'=>'Employee']);
        \App\Role::create(['name'=>'Super Admin']);
//         $this->call(UsersTableSeeder::class);
    }
}
