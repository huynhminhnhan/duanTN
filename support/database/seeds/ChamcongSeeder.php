<?php

use Illuminate\Database\Seeder;

use App\Chamcong;

class ChamcongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cc = new Chamcong();
        $cc->name = 'Cuong';
        $cc->description = 'Cham ngoan';
        $cc->save();

        $cc1 = new Chamcong();
        $cc1->name = 'Cuong';
        $cc1->description = 'Cham ngoan';
        $cc1->save();
    }
}
