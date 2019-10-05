<?php

use Illuminate\Database\Seeder;
use App\Trangcanhan;

class information extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = new Trangcanhan();
        // $info->id = 1;
        $info->mssv = 'PS06813';
        $info->name = 'Huỳnh Nhật Cường';
        $info->sex = 'Nam';
        $info->cm = '285742969';
        $info->ngaycap = '28/05/2015';
        $info->tendn = 'cuonghnps06813';
        $info->ngaysinh = '21/01/1999';
        $info->diachi = '386 Quang Trung, Gò Vấp';
        $info->noicap = 'Bình Phước';
        $info->email = 'huynhnhatcuong000';
        $info->phone = '0344155273';
        $info->email2 = 'cuonghnps06813';
        $info->quequan = 'Long An';
        $info->khoa = 'CNTT';
        $info->chuyennganh = 'Web';
        $info->ngaynhaphoc = '09/2017';
        $info->trangthai = 'Đang học';
        $info->nganh = 'Thiết kế Website';
        $info->noidungdaotao = 'Lập trình';
        $info->ngaydaotao = '21';
        $info->kithu = '07';

        $info->save();
    }
}
