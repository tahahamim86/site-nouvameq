<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
public $detalis;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detalis)
    {
        $this->detalis=$detalis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Message')->view('emails.ContactMail');
    }
}
