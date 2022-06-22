<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'blr_1_4' ,
        'blr_5_11',
        'blr_gl',
        'blr_dr',
        'rus_1_4_rus',
        'rus_5_8_rus',
        'rus_9_11_rus',
        'rus_1_4_blr',
        'rus_5_8_blr',
        'rus_9_11_blr',
        'onl_1_4_rus',
        'onl_5_8_rus',
        'onl_9_11_rus',
        'onl_1_4_blr',
        'onl_5_8_blr',
        'onl_9_11_blr',
        'geo',
    ];
}
