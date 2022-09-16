<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\TeachersTrait;

class MainPageController extends Controller
{
    private $page = 'Главная';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $teachers = TeachersTrait::getTeachers();
        $news = NewsTrait::getNews($this->page);
        $documents = DocumentsTrait::getDocuments($this->page);


        return view('welcome', compact('mainNews', 'teachers', 'news', 'documents'));
    }
}
