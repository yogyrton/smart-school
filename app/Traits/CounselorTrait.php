<?php

namespace App\Traits;

use App\Models\Admin\Counselor;

trait CounselorTrait
{
    public static function getCounselors($page)
    {
        return Counselor::query()->where('camp', '=', $page)->get();
    }
}
