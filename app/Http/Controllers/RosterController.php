<?php

namespace App\Http\Controllers;

use App\Transformers\RosterTransformer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\roster;
use Auth;

class RosterController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $rosters = roster::where('user_id', $user_id)->get(); 

        $response = fractal()
            ->collection($rosters)
            ->transformWith(new RosterTransformer)
            ->includeProducts()
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
