<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\PriceTrait;
use Illuminate\Http\Request;

class JukovLugController extends Controller
{
    public $page = 'Лагерь Жуков Луг';
    public $price = 'blr_gl';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $priceBel = PriceTrait::getPrice($this->price);
        $documents = DocumentsTrait::getDocuments();

        return view('school-bel-1-4', compact('mainNews', 'priceBel', 'documents'));
    }
}
