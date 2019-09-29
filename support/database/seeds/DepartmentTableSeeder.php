<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\User;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Department = new Department();
        $Department->user_id = 3;
        $Department->name = 'Giam Doc';
        $Department->description = 'Phong giam doc';
        $Department->save();
    }
}
