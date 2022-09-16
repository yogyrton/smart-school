<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\PriceTrait;

class SchoolRussiaController extends Controller
{
    private $page = 'Школа Россия';
    private $priceRus_1_4 = 'onl_1_4_rus';
    private $priceRus_5_8 = 'onl_5_8_rus';
    private $priceRus_9_11 = 'onl_9_11_rus';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $price_1_4 = PriceTrait::getPrice($this->priceRus_1_4);
        $price_5_8 = PriceTrait::getPrice($this->priceRus_5_8);
        $price_9_11 = PriceTrait::getPrice($this->priceRus_9_11);
        $news = NewsTrait::getNews($this->page);
        $documents = DocumentsTrait::getDocuments($this->page);

        return view('school-rus', compact('mainNews', 'news', 'documents', 'price_1_4', 'price_5_8', 'price_9_11'));
    }
}
