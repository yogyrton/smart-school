<?php

namespace App\Http\Controllers;

use App\Mail\WindowMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailWindowController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        $path = $request->file('file')->store('123', 'public');

        Mail::to('parusov.93@gmail.com')->send(new WindowMail($data, $path));

        //Storage::delete('/public/' . $this->path);
    }
}
