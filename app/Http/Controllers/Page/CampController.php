<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\MainNewsTrait;
use Illuminate\Http\Request;

class CampController extends Controller
{
    private $page = 'Лагерь';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);

        return view('camp', compact('mainNews'));
    }
}
