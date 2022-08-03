<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Traits\DocumentsTrait;
use App\Traits\GalleryTrait;
use App\Traits\LinksTrait;
use App\Traits\MainNewsTrait;
use App\Traits\PhotoTrait;

class SchoolBelarusController extends Controller
{

    private $page = 'Школа Беларусь';
    private $doc = 'Главная';

    public function index()
    {
        $mainNews = MainNewsTrait::getMainNews($this->page);
        $documents = DocumentsTrait::getDocuments($this->doc);
        $photos = GalleryTrait::getPhotoGallery();
        $links = LinksTrait::getTeachers($this->page);

        return view('school-bel', compact('mainNews', 'documents', 'photos', 'links'));
    }
}
