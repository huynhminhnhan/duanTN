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
        $cc ->id_user = 1;
        $cc->ngay = '01/12/2019';
        $cc->thu = '2'; //Thứ
        $cc->gio_vao1 = '07:05';
        $cc->gio_ra1 = '11:30';
        $cc->gio_vao2 = '14:20';
        $cc->gio_ra2 = '17:30';
        $cc->ghi_chu = 'no';
        $cc->save();

        $cc = new Chamcong();
        $cc -> id_user = 1;
        $cc->ngay = '02/12/2019';
        $cc->thu = '3'; //Thứ
        $cc->gio_vao1 = '08:20';
        $cc->gio_ra1 = '11:48';
        $cc->gio_vao2 = '13:30';
        $cc->gio_ra2 = '17:35';
        $cc->ghi_chu = 'no';
        $cc->save();

        $cc = new Chamcong();
        $cc ->id_user = 1;
        $cc->ngay = '03/12/2019';
        $cc->thu = '4'; //Thứ
        $cc->gio_vao1 = '07:35';
        $cc->gio_ra1 = '11:12';
        $cc->gio_vao2 = '13:20';
        $cc->gio_ra2 = '17:15';
        $cc->ghi_chu = 'no';
        $cc->save();

        $cc = new Chamcong();
        $cc ->id_user = 1;
        $cc->ngay = '03/12/2019';
        $cc->thu = '4'; //Thứ
        $cc->gio_vao1 = '09:32';
        $cc->gio_ra1 = '10:12';
        $cc->gio_vao2 = '14:20';
        $cc->gio_ra2 = '17:15';
        $cc->ghi_chu = 'no';
        $cc->save();

        $cc = new Chamcong();
        $cc -> id_user = 1;
        $cc->ngay = '04/12/2019';
        $cc->thu = '5'; //Thứ
        $cc->gio_vao1 = '08:35';
        $cc->gio_ra1 = '9:30';
        $cc->gio_vao2 = '14:30';
        $cc->gio_ra2 = '17:15';
        $cc->ghi_chu = 'no';
        $cc->save();
    }
}
