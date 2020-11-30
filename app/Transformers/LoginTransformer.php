<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;


class LoginTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'api_token' => $user->api_token,
        ];
    }
}