<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\PriceTrait;
use Illuminate\Http\Request;

class SchoolBelarus5_11Controller extends Controller
{
    private $page = 'Школа Беларусь 5-11';
    private $price = 'blr_5_11';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $price = PriceTrait::getPrice($this->price);
        $news = NewsTrait::getNews();
        $documents = DocumentsTrait::getDocuments($this->page);

        return view('school-bel-5-11', compact('mainNews', 'price', 'news', 'documents'));
    }
}
