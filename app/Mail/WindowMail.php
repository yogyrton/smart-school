<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WindowMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $path;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $path = null)
    {
        $this->data = $data;
        $this->path = $path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->path) {
            return $this->view('mail.window-mail')->attach(public_path('storage/') . $this->path);
        }
        return $this->view('mail.window-mail');
    }
}
