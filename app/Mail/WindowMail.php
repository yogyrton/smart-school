<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

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
    public function __construct($data, $path)
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
        return $this->view('mail.window-mail')->attach(public_path('storage/') . $this->path);

    }
}
