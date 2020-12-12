<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rosterWithProduct extends Model
{
    protected $fillable = [
        'roster_id', 'product_id'
    ];
}
