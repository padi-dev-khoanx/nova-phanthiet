<?php

namespace App\Mail;

use App\Models\Otp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailGetInfo extends Mailable
{
    use Queueable, SerializesModels;

    protected $phone, $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.getInfo',[
            'name' => $this->name,
            'phone' => $this->phone,
        ])->subject('Nhận thông tin từ web novaworld-phanthiet.space');
    }
}
