<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $page;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $page)
    {
        $this->data = $data;
        $this->page = $page;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.message-mail');
    }
}
