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
        // $this->call(UsersTableSeeder::class);
        // User seeder will use the roles above created.
        $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(ChamcongSeeder::class);
        $this->call(QuestionSeeder::class);
        
    }
}
