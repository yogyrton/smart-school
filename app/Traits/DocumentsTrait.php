<?php

namespace App\Traits;

use App\Models\Admin\Document;

trait DocumentsTrait
{
    public static function getDocuments()
    {
        return Document::all();
    }
}
