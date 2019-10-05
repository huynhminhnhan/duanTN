<?php

use Illuminate\Database\Seeder;
use App\CataQuestion;

class CataQuestiona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cq = new CataQuestion();
        $cq->name_cata = 'Dong tien';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name_cata = 'Chuyen nganh';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name_cata = 'Hoc lai';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name_cata = 'Bao luu';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name_cata = 'Khac..';
        $cq->save();
    }
}
