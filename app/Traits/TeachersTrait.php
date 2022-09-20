<?php

namespace App\Traits;

use App\Models\Admin\Teacher;

trait TeachersTrait
{
    public static function getTeachers()
    {
        return Teacher::query()->select('name', 'position', 'category', 'experience', 'thumbnail')->orderBy('point')->get();
    }
}
