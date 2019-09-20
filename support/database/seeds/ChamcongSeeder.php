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
        // $cc->name = 'Cuong';
        // $cc->description = 'Cham ngoan';
        $cc->ngay = '31/10/2001';
        $cc->thu = '12/01/2000'; //Thứ
        $cc->giovao1 = '13h';
        $cc->giora1 = '18h';
        $cc->giovao2 = '8h';
        $cc->giora2 = '21h';
        $cc->ditre = 'Không';
        $cc->vesom = 'Có';
        $cc->ghichu = 'Ngoan';
        $cc->save();

        // $cc1 = new Chamcong();
        // $cc1->name = 'Cuong';
        // $cc1->description = 'Cham ngoan';
        // $cc1->save();
    }
}
