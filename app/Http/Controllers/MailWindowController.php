<?php

namespace App\Http\Controllers;

use App\Mail\WindowMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailWindowController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('mail', 'public');
            Mail::to('parusov.93@gmail.com')->send(new WindowMail($data, $path));
        } else {
            Mail::to('parusov.93@gmail.com')->send(new WindowMail($data));
        }

    }
}
