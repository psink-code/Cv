<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $message;


    public function __construct($info)
    {
        $this->info = $info;
    }


    public function build()
    {
        return $this->view('mail/contact-mail',['info'=>$this->info]);
    }
}
