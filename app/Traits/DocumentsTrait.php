<?php

namespace App\Traits;

use App\Models\Admin\Document;

trait DocumentsTrait
{
    public static function getDocuments($page)
    {
        return Document::query()->where('page', '=', $page)->get();
    }
}
