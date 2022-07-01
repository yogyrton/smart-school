<?php

namespace App\Traits;

use App\Models\Admin\MainNews;

/**
 * В контроллере передать в $page имя страницы
 */
trait MainNewsTrait
{
    public static function getMainNews($page)
    {
        return MainNews::query()->select('title', 'text')->where('page', '=', $page)->get();
    }
}
