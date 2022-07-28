<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\MainNewsTrait;
use App\Traits\PhotoTrait;

class SchoolBelarusController extends Controller
{

    private $page = 'Школа Беларусь';


    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $documents = DocumentsTrait::getDocuments($this->page);
        $photo = PhotoTrait::getAllPhoto();

        return view('school-bel', compact('mainNews', 'documents', 'photo'));
    }
}
