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
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);

   	 // User seeder will use the roles above created.
        $this->call(AccountsTableSeeder::class);
        $this->call(ChamcongSeeder::class);
        // $this->call(QuestionSeeder::class);
        $this->call(CataQuestiona::class);
        // $this->call(information::class);
        $this->call(AnswerSeeder::class);



    //    khi nao tạo seed mới thì đóng các class đã tạo seed rồi lại
    }
}
