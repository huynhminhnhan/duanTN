<?php

use Illuminate\Database\Seeder;
use App\Account;
use App\User;
use App\Department;
class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Accounts = new Account();
        $Accounts->name = 'Huỳnh Minh Nhân';
        $Accounts->user_id = 3;

        $Accounts->phone = '0583255203';
        $Accounts->birthday = '03/01/1999';
        $Accounts->sex = 'Nam';
        $Accounts->address = '170/23 Le duc tho';
        $Accounts->specialized = 'CONG NGHE THONG TIN';
        $Accounts->semester = '7';
        $Accounts->status = '1';
        $Accounts->avatar = 'nhan.jpg';
        $Accounts->department_id = 1;
        $Accounts->save();

        $Accounts = new Account();
        $Accounts->name = 'Nhan vien';
        $Accounts->user_id = 1;

        $Accounts->phone = '0583255203';
        $Accounts->birthday = '03/01/1999';
        $Accounts->sex = 'Nam';
        $Accounts->address = '170/23 Le duc tho';
        $Accounts->specialized = 'CONG NGHE THONG TIN';
        $Accounts->semester = '7';
        $Accounts->status = '1';
        $Accounts->avatar = 'nhan.jpg';
        $Accounts->department_id = 1;
        $Accounts->save();



        // $info = new Trangcanhan();
        // // $info->id = 1;
        // $info->mssv = 'PS06813';
        // $info->name = 'Huỳnh Nhật Cường';
        // $info->sex = 'Nam';
        // $info->cm = '285742969';
        // $info->ngaycap = '28/05/2015';
        // $info->tendn = 'cuonghnps06813';
        // $info->ngaysinh = '21/01/1999';
        // $info->diachi = '386 Quang Trung, Gò Vấp';
        // $info->noicap = 'Bình Phước';
        // $info->email = 'huynhnhatcuong000';
        // $info->phone = '0344155273';
        // $info->email2 = 'cuonghnps06813';
        // $info->quequan = 'Long An';
        // $info->khoa = 'CNTT';
        // $info->chuyennganh = 'Web';
        // $info->ngaynhaphoc = '09/2017';
        // $info->trangthai = 'Đang học';
        // $info->nganh = 'Thiết kế Website';
        // $info->noidungdaotao = 'Lập trình';
        // $info->ngaydaotao = '21';
        // $info->kithu = '07';

        // $info->save();
    }
}
