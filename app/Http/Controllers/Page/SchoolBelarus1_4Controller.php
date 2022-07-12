<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\PriceTrait;
use Illuminate\Http\Request;

class SchoolBelarus1_4Controller extends Controller
{
    public $page = 'Школа Беларусь 1-4';
    public $price = 'blr_1_4';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $priceBel = PriceTrait::getPrice($this->price);
        $news = NewsTrait::getNews();
        $documents = DocumentsTrait::getDocuments();

        return view('school-bel-1-4', compact('mainNews', 'priceBel', 'news', 'documents'));
    }
}
