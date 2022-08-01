<?php

namespace App\Traits;

use App\Models\Admin\Gallery;

trait GalleryTrait
{
    public static function getPhotoGallery()
    {
        return Gallery::query()->orderByDesc('created_at')->get();
    }
}
