<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $nid;
    public $scheduledDate;
    public $centerName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $nid, $scheduledDate, $centerName)
    {
        $this->name = $name;
        $this->nid = $nid;
        $this->scheduledDate = $scheduledDate;
        $this->centerName = $centerName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Vaccine Registration Successful')
                    ->view('email.email_format');
    }
}
