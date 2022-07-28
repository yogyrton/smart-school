<?php

namespace App\Traits;

use App\Models\Admin\Photo;

trait PhotoTrait
{
    public static function getPhotoByCamp($camp)
    {
        return Photo::query()->where('camp', '=', $camp)->get();
    }

    public static function getAllPhoto()
    {
        return Photo::all();
    }
}
