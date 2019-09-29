<?php

use Illuminate\Database\Seeder;

use App\payroll;
class banluong extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $luong = new payroll();
        $luong->id = '001';
        $luong->user_id = '002'; 
        $luong->thang = '5';
        $luong->nam = '2019';
        $luong->ghi_chu = 'đi trễ 50 phút';
        $luong->tong = '3500000';
        $luong->luong_can_ban = '4000000';
        $luong->bao_hiem = '1000000';
        $luong->thuong = '0';
        $luong->save();
    }
}
