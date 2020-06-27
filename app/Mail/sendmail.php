<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject;
    public $message;

    public function __construct($subject,$message)
    {
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail_sub = $this->subject;
        $mail_mess = $this->message;
        // return $this->view('mail.mailtemplate', compact('mail_sub'))->subject($mail_sub);
        dd($mail_mess);

        return $this->view('mail.mailtemplate')
        ->with([
            'name' => $this->message->name,
            'age' => $this->message->age,
            'date' => $this->message->date,
            'time' => $this->message->time,
            'number' => $this->message->number,
            'about' => $this->message->about,
        ]);
    }
}
