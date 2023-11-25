<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public function getFormattedDishPriceAttribute($value)
    {
        return number_format($value, 2, '.', ',');
    }
    protected $fillable = [
        'dish_name',
        'dish_description',
        'dish_price',
        'image_path',
    ];
}
