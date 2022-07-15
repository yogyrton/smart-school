<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\NewsTrait;
use App\Traits\PriceTrait;

class OnlineSchoolController extends Controller
{
    public $page = 'Онлайн школа';
    public $priceBel_1_4 = 'onl_1_4_blr';
    public $priceRus_1_4 = 'onl_1_4_rus';
    public $priceBel_5_8 = 'onl_5_8_blr';
    public $priceRus_5_8 = 'onl_5_8_rus';
    public $priceBel_9_11 = 'onl_9_11_blr';
    public $priceRus_9_11 = 'onl_9_11_rus';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $priceBel_1 = PriceTrait::getPrice($this->priceBel_1_4);
        $priceBel_5 = PriceTrait::getPrice($this->priceBel_5_8);
        $priceBel_9 = PriceTrait::getPrice($this->priceBel_9_11);
        $priceRus_1 = PriceTrait::getPrice($this->priceRus_1_4);
        $priceRus_5 = PriceTrait::getPrice($this->priceRus_5_8);
        $priceRus_9 = PriceTrait::getPrice($this->priceRus_9_11);
        $news = NewsTrait::getNews();
        $documents = DocumentsTrait::getDocuments();

        return view('online-school', compact('mainNews', 'news', 'documents', 'priceBel_1', 'priceBel_5', 'priceBel_9', 'priceRus_1', 'priceRus_5', 'priceRus_9'));
    }
}
