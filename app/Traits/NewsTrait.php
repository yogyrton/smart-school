<?php

namespace App\Traits;

use App\Models\Admin\News;

trait NewsTrait
{
    public static function getNews()
    {
        return News::query()->orderByDesc('updated_at')->get();
    }
}
