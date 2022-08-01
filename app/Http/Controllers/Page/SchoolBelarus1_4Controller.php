<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\PriceTrait;

class SchoolBelarus1_4Controller extends Controller
{
    private $page = 'Школа Беларусь 1-4';
    private $doc = 'Главная';
    private $price = 'blr_1_4';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $price = PriceTrait::getPrice($this->price);
        $news = NewsTrait::getNews();
        $documents = DocumentsTrait::getDocuments($this->doc);

        return view('school-bel-1-4', compact('mainNews', 'price', 'news', 'documents'));
    }
}
