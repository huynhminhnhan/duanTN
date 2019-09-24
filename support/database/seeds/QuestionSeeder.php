<?php

use Illuminate\Database\Seeder;
use App\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qs = new question();
        $qs->idUser = 1;
        $qs->idAdmin = 2;
        $qs->idDepartment=2;
        $qs->Status=0;
        $qs->Content='test gui yeu cau content';
        $qs->Title='test gui yeu cau title';
        $qs->Images='1.jpg';
        $qs->idCataQuestion=1;
        $qs->save();
    }
}
