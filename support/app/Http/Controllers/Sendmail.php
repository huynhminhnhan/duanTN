<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\OrderShipped;
class Sendmail extends Controller
{
    public function viewSendMailDepartments() {
        return view('adminLayout/sendmail');
    }
    public function SendMailDepartments(Request $Request) {
        $input = $Request->all();

        mail::to('huuhung112999@gmail.com')->send(new OrderShipped('ccc'));
        return redirect('/')->with('success', 'Bạn đã thêm câu hỏi thành công'); 

    }
}
