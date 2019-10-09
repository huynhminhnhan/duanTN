<?php

use Illuminate\Database\Seeder;
use App\AnswerModel;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ans = new AnswerModel();
        $ans->id_user = 4;
        $ans->id_admin = 2;

        $ans->id_question = 3;
        $ans->Content_Answer = 'ban khong nen rep nhu vay';


        $ans->save();
    }
}
