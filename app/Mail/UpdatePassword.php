<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UpdatePassword extends Mailable
{
    use Queueable, SerializesModels;

    protected $password;
    protected $email;
    protected $token;

    public function __construct($password, $email, $token)
    {
        $this->password = $password; 
        $this->email = $email;   
        $this->token = $token;   
    }


    public function build()
    {
       return $this->subject("Password Request Notification")->view("emails.update-password")
       ->to($this->email)
       ->with([
            'password'=> $this->password,
            'email' => $this->email,
            'token' => $this->token
       ]);
    }


}
