<?php

namespace App\Traits;

use App\Models\Admin\Price;

trait PriceTrait
{
    public static function getPrice($price)
    {
        return Price::query()->pluck($price)->first();
    }
}
