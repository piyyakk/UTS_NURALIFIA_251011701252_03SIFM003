<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampGear extends Model
{
    protected $table = 'camp_gears';
    public $timestamps = false;

    protected $fillable = [
        'name', 'category', 'rent_price', 'stock', 'image', 'description',
    ];
}
