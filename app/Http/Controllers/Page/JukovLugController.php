<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\CounselorTrait;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\PhotoTrait;
use App\Traits\PriceTrait;
use Illuminate\Http\Request;

class JukovLugController extends Controller
{
    private $page = 'Лагерь Жуков Луг';
    private $priceForSale = 'blr_gl_sale';
    private $price = 'blr_gl';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $documents = DocumentsTrait::getDocuments($this->page);
        $price = PriceTrait::getPrice($this->price);
        $priceForSale = PriceTrait::getPrice($this->priceForSale);
        $counselors = CounselorTrait::getTeachers($this->page);
        $photos = PhotoTrait::getPhotoByCamp($this->page);

<<<<<<< HEAD
        return view('camp-jukov-lug', compact('mainNews', 'priceBel', 'documents'));
=======
        return view('camp-jukov-lug', compact('mainNews', 'price', 'documents', 'counselors', 'photos', 'priceForSale'));
>>>>>>> 231aa5ea8dfd596f18b479d21ddc80d1bad99d13
    }
}
