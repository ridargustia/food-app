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
            ->includePlaces()
            ->toArray();

        if($response)
        {
            return response()->json([
                'success' => true,
                'message' => 'Request is successful.',
                'data' => $response
            ], 200);
        }
        
    }

    public function update(Request $request)    //Fitur update profile user (User Login)
    {
        $user = User::find(Auth::user()->id);
        
        $user->name = $request->get('name', $user->name);
        $user->phone_number = $request->get('phone_number', $user->phone_number);
        $user->password = $request->password == null ? $user->password : bcrypt($request->password);
        $user->save();

        $response = fractal()
                ->item($user)
                ->transformWith(new UserTransformer)
                ->toArray();

        if($response)
        {
            return response()->json([
                'success' => true,
                'message' => 'Request is successful.',
                'data' => $response
            ], 200);
        }
    }
}
