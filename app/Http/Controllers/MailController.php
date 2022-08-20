<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use App\Mail\RequestFormMail;
use App\Mail\WindowMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        switch ($data['pages']) {
            case 'belarus':
                $page = 'smart-s.info/school-belarus';
                break;
            case 'junior':
                $page = 'smart-s.info/school-belarus/junior';
                break;
            case 'senior':
                $page = 'smart-s.info/school-belarus/senior';
                break;
            case 'russia':
                $page = 'smart-s.info/school-russia';
                break;
            case 'online':
                $page = 'smart-s.info/school-online';
                break;
            case 'camp':
                $page = 'smart-s.info/camp';
                break;
            case 'jukov-lug':
                $page = 'smart-s.info/camp/jukov-lug';
                break;
            case 'georgia':
                $page = 'smart-s.info/camp/georgia';
                break;
            case 'dreamland':
                $page = 'smart-s.info/camp/dreamland';
                break;
            default:
                $page = 'smart-s.info';
                break;

        }

        if ($data['pages'] === 'camp' || $data['pages'] === 'georgia' || $data['pages'] === 'jukov-lug' || $data['pages'] === 'dreamland') {
            Mail::to('summer.camp.dreamland@gmail.com')->send(new MessageMail($data, $page));
        } else {
            Mail::to('smart2020ekaterina@gmail.com')->send(new MessageMail($data, $page));
        }

    }

}
