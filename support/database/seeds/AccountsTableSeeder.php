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
        $Accounts->user_id = 1;
        $Accounts->sex = 'Nam';
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
 
    }
}
