<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Auth;
use App\User;

class UserController extends Controller
{
    public function profile(User $user)
    {
        $user = $user->find(Auth::user()->id);

        $response = fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->toArray();

        return response()->json($response, 200);
    }
}
