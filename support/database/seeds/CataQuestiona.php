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
        $cq->name = 'Dong tien';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name = 'Chuyen nganh';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name = 'Hoc lai';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name = 'Bao luu';
        $cq->save();

        $cq = new CataQuestion();
        $cq->name = 'Khac..';
        $cq->save();
    }
}
