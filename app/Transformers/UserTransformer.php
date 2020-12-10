<?php

namespace App\Transformers;

use App\User;
use App\Transformers\PlaceTransformer;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'places'
    ];

    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'phone_number' => $user->phone_number,
            'image' => $user->image,
            'level_user' => $user->level_user,
            'registered' => $user->created_at->diffForHumans(),
        ];
    }

    public function includePlaces(User $user)
    {
        $places = $user->places()->latestFirst()->get();

        return $this->collection($places, new PlaceTransformer);
    }
}