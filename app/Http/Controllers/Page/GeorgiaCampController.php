<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\CounselorTrait;
use App\Traits\DocumentsTrait;
use App\Traits\LinksTrait;
use App\Traits\MainNewsTrait;
use App\Traits\PhotoTrait;
use App\Traits\PriceTrait;

class GeorgiaCampController extends Controller
{
    private $page = 'Лагерь в Грузии';
    private $price = 'geo';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $documents = DocumentsTrait::getDocuments($this->page);
        $price = PriceTrait::getPrice($this->price);
        $counselors = CounselorTrait::getCounselors($this->page);
        $photos = PhotoTrait::getPhotoByCamp($this->page);
        $links = LinksTrait::getLinks($this->page);

        return view('camp-georgia', compact('mainNews', 'price', 'documents', 'counselors', 'photos', 'links'));
    }
}
