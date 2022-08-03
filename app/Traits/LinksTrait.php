<?php

namespace App\Traits;

use App\Models\Admin\Link;

trait LinksTrait
{
    public static function getTeachers($page)
    {
        return Link::query()->where('camp', '=', $page)->get();
    }
}
