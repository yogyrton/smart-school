<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MainNews;
use App\Models\Admin\News;
use App\Models\Admin\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $news = MainNews::query()->count();
        $teachers = Teacher::query()->count();
        $new = News::query()->count();

        return view('admin.main', compact('news', 'teachers', 'new'));
    }
}
