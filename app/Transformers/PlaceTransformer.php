<?php

namespace App\Transformers;

use App\place;
use League\Fractal\TransformerAbstract;


class PlaceTransformer extends TransformerAbstract
{
    public function transform(place $place)
    {
        return [
            'id' => $place->id,
            'id_category' => $place->id_category,
            'id_user' => $place->id_user,
            'name' => $place->name,
            'phone_number' => $place->phone_number,
            'address' => $place->address,
            'open_time' => $place->open_time,
            'description' => $place->description,
            'url_gmap' => $place->url_gmap,
            'is_open' => $place->is_open,
            'is_close' => $place->is_close,
            'is_off' => $place->is_off,
            'counter' => $place->counter,
            'registered' => $place->created_at->diffForHumans(),
        ];
    }
}