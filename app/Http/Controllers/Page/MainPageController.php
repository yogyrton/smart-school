<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\TeachersTrait;

class MainPageController extends Controller
{
    public $page = 'Главная';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $teachers = TeachersTrait::getTeachers();
        $news = NewsTrait::getNews();
        $documents = DocumentsTrait::getDocuments();


        return view('welcome', compact('mainNews', 'teachers', 'news', 'documents'));
    }
}
