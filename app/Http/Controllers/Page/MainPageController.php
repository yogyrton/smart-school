<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Admin\MainNews;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\TeachersTrait;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    use MainNewsTrait;

    public function index()
    {
        $page = 'Главная';
        $mainNews = MainNewsTrait::getMainNews($page);
        $teachers = TeachersTrait::getTeachers();
        $news = NewsTrait::getNews();


        return view('welcome', compact('mainNews', 'teachers', 'news'));
    }


}
