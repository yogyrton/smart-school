<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Counselor;
use App\Models\Admin\Document;
use App\Models\Admin\Gallery;
use App\Models\Admin\Link;
use App\Models\Admin\MainNews;
use App\Models\Admin\News;
use App\Models\Admin\Photo;
use App\Models\Admin\Price;
use App\Models\Admin\Teacher;

class AdminController extends Controller
{

    public function index()
    {
        $news = MainNews::query()->count();
        $teachers = Teacher::query()->count();
        $new = News::query()->count();
        $counselors = Counselor::query()->count();
        $price = Price::query()->count();
        $doc = Document::query()->count();
        $photo = Photo::query()->count();
        $gallery = Gallery::query()->count();
        $links = Link::query()->count();

        return view('admin.main', compact('news', 'teachers', 'new', 'counselors', 'doc', 'price', 'photo', 'gallery', 'links'));
    }
}
