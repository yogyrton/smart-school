<?php

namespace App\Traits;

use App\Models\Admin\News;

trait NewsTrait
{
    public static function getNews($page)
    {
        return News::query()->where('page', '=', $page)->get();
    }
}
