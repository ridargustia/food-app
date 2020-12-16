<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\roster;
use App\place;

class product extends Model
{
    protected $fillable = [
        'place_id', 'category_id', 'subcategory_id', 'name', 'price', 'description', 'image', 'is_active', 'is_order', 'counter', 'rating'
    ];

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'DESC');
    }

    public function place()
    {
        return $this->belongsTo(place::class);
    }

    public function rosters()
    {
        return $this->belongsToMany(roster::class, 'roster_with_products');
    }
}
