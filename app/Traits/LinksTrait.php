<?php

namespace App\Traits;

use App\Models\Admin\Link;

trait LinksTrait
{
    public static function getLinks($page)
    {
        return Link::query()->where('camp', '=', $page)->first();
    }
}
