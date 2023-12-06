<?php

namespace App\Models;

use App\Models\Dish;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
