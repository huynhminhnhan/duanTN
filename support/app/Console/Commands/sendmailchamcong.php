<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\autosendmail;
use App\Chamcong;
use App\Account;
use App\User;
class sendmailchamcong extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:chamcong';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email chamcong moi ngay';
    public $chamcong;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        // $this->chamcong = $chamcong;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user_role =  User::get()->load('roles');
        $arr_id_acount = array();
        $month =  (int)date("m");
        $year = (int)date("Y");
        $data = '';
        if($user_role) {
            
        foreach ($user_role as $items) {
            if ($items->hasRole('employees') && !empty($items->email)) {
                // Mail::to($items->email)->send(new autosendmail('content','Bảng chấm công '));
                $chamcong = Chamcong::where('id_user', $items->id)
                ->whereMonth('ngay',$month)
                ->whereYear('ngay',$year)->get()->all();
                
                // foreach ($chamcong as $key => $item) {
                //         // $data = new autosendmail($item,'Bảng chấm công tháng '.$month.' ');
                //         Mail::to($items->email)->send(new autosendmail($item,'Bảng chấm công tháng '.$month.' '));
                // }
             }
            }
        
        }
        return $chamcong;
        // $chamcong = Chamcong::whereIn('id_user', $arr_id_acount)
        // ->whereMonth('ngay',$month)
        // ->whereYear('ngay',$year)->get()->all();
        // foreach ($chamcong as $key => $items) {
        //     Mail::to($items->email)->send(new autosendmail('content','Bảng chấm công tháng '));
        // }
        // return $chamcong;
        
        // $Account = Account::whereIn('user_id', $arr_id_acount)->get();
        // $this->chamcong = $Account;
        // return $Account;
        // Mail::to('huynhminhnhan69@gmail.com')->send(new autosendmail('content','subject'));
    }
}
