<?php

namespace App\Http\Controllers;

use App\Http\Requests\VueFormRequest;
use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(VueFormRequest $request)
    {

        $data = $request->validated();
        $mail = $data['email'];



        Mail::to('parusov.93@gmail.com')->send(new MessageMail($mail));

    }
}
