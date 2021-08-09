<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $mail_subject;
    private $message;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $mail_subject
     * @param $message
     */
    public function __construct($name, $email, $mail_subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mail_subject = $mail_subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact', [
            'name' => $this->name,
            'email' => $this->email,
            'mail_subject' => $this->mail_subject,
            'message' => $this->message,
        ])
            ->subject('Contact - Atmos');
    }
}
