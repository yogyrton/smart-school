<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\WindowMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailWindowController extends Controller
{
    public function send(MailRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('mail', 'public');
            Mail::to('smart2020ekaterina@gmail.com')->send(new WindowMail($data, $path));
        } else {
            Mail::to('smart2020ekaterina@gmail.com')->send(new WindowMail($data));
        }
    }
}
