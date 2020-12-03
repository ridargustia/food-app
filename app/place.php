<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;

class place extends Model
{
    protected $fillable = [
        'category_id', 'user_id', 'name', 'phone_number', 'address', 'open_time', 'description', 'url_gmap', 'is_open', 'is_close', 'is_off', 'counter'
    ];

    public function products()
    {
        return $this->hasMany(product::class);
    }
}
