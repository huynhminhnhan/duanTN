<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class autosendmail extends Mailable
{
    public $content;
    public $subject;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content,$subject)
    {
       $this->content = $content;
       $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_content = $this->content;
        $e_subject = $this->subject;
        $data = $e_content->get();
        // dd($data);
         
     
        return $this->from('huynhminhnhan69@gmail.com')->view('templateMail.Autosendmailtemplatemail', ["data"=> $data])->subject($e_subject);

        // return $this->view('templateMail.Autosendmailtemplatemail',compact("e_content"))->subject($e_subject);
    }
}
