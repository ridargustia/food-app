<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $fillable = [
        'id_category', 'id_user', 'name', 'phone_number', 'address', 'open_time', 'description', 'url_gmap', 'is_open', 'is_close', 'is_off', 'counter'
    ];
}
