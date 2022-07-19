<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->all();
        return $data;


    }
}
