<?php

use Illuminate\Database\Seeder;

class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = new question();
       $questions->idUser = '01';
       $questions->idAdmin='123';
       $questions->idApartment='456';
       $questions->Content='content';
       $questions->Title='title';
       $questions->Images='1.jpg';
       $questions->idCataquestion='001';
       $questions->save();
    }
}
