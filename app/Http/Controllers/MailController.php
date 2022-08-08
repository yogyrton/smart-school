<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        $page = 'smart-s.info';

        switch ($data['page']) {
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
                $page = 'smart-s.info/camp/jukov-lug';
                break;
            case 'jukov-lug':
                $page = 'smart-s.info/camp/georgia';
                break;
            case 'dreamland':
                $page = 'smart-s.info/camp/dreamland';
                break;
            default:
                $page = 'smart-s';
                break;
        }

        $mailTo = 'parusov.93@gmail.com';

        Mail::to($mailTo)->send(new MessageMail($data, $page));
    }
}
