<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;

class roster extends Model
{
    protected $fillable = [
        'user_id', 'title'
    ];

    public function products()
    {
        return $this->belongsToMany(product::class, 'roster_with_products');
    }
}
