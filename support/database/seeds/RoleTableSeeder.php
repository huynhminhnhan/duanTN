<?php

use Illuminate\Database\Seeder;
// use User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role_employee = new Role();
       $role_employee->name = 'student';
       $role_employee->description = 'A Student';
       $role_employee->save();

       $role_employee = new Role();
       $role_employee->name = 'employees';
       $role_employee->description = 'A employees';
       $role_employee->save();

       $role_manager = new Role();
       $role_manager->name = 'admin';
       $role_manager->description = 'A Admin User';
       $role_manager->save();
    }
}
