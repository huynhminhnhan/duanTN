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
        $Department->name_depart = 'Giam Doc';
        $Department->description = 'Phong giam doc';
        $Department->save();

        $Department = new Department();
        $Department->name_depart = 'Student';
        $Department->description = 'Phòng student';
        $Department->save();
    }
}
