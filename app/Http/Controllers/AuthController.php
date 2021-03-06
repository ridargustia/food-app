<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transformers\UserTransformer;
use App\Transformers\LoginTransformer;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone_number' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'image' => 'image'
        ]);

        if($request->file('image') == "")
        {
            $user = User::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => bcrypt($request->password),
                'api_token' => bcrypt($request->phone_number),
                'image' => "default.jpg",
                'level_user' => 2,
            ]);
        }else{
            $file = $request->file('image');
            $image_name = time()."_".$request->name.".".$file->getClientOriginalExtension();
            $path = $file->storeAs('image-user', $image_name);
            // $path = $request->file('image')->move(public_path("/image_profile"), $image_name);
            // $imageURL = url('/image_profile'.$image_name);

            $user = User::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => bcrypt($request->password),
                'api_token' => bcrypt($request->phone_number),
                'image' => $image_name,
                'level_user' => 2,
            ]);
        }

        $response = fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->addMeta([
                'token' => $user->api_token
            ])
            ->toArray();

        if($response){
            return response()->json([
                'success' => true,
                'message' => 'Register is successful.',
                'data' => $response
            ], 201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Register failed.'
            ], 401);
        }
        
    }

    public function login(Request $request, User $user)
    {
        if(!Auth::attempt(['phone_number' => $request->phone_number, 'password' => $request->password]))
        {
            return response()->json([
                'success' => false,
                'message' => 'Login failed.'
            ], 401);
        }

        $user = $user->find(Auth::user()->id);

        $response = fractal()
            ->item($user)
            ->transformWith(new LoginTransformer)
            ->toArray();

        if($response)
        {
            return response()->json([
                'success' => true,
                'message' => 'Login success.',
                'data' => $response
            ], 200);
        }

    }
}
