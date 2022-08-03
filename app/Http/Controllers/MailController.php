<?php

namespace App\Http\Controllers;

use App\Http\Requests\VueFormRequest;
use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        Mail::to('parusov.93@gmail.com')->send(new MessageMail($data));
    }
}
