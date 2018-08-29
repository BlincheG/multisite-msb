<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

use Lang;

class Callback extends Mailable
{
    use Queueable, SerializesModels;

    protected $name  = NULL;
    protected $phone = NULL;
    protected $email = NULL;

    public function __construct($name, $phone, $email = NULL)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function build()
    {
        return $this
            ->view('email.callback')
            ->subject(Lang::get('email.callback_subject'))
            ->with([
                'name'  => $this->name,
                'phone' => $this->phone,
                'email' => $this->email
            ]);
    }
}
