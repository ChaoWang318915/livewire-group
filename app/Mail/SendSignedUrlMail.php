<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSignedUrlMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $url;

    public function __construct($url)
    {
        $this->url = $url; 
    }


    public function build()
    {
       return $this->subject("Signed URL Notification")->view("emails.send-signed-url-mail")
       ->with([
            'url'=> $this->url
       ]);
    }


}
