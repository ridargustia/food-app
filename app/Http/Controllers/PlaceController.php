<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\PlaceTransformer;
use App\place;
use Auth;


class PlaceController extends Controller
{
    public function add(Request $request)
    {
        $this->validate($request, [
            'id_category' => 'required',
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'open_time' => 'required|string',
            'description' => 'required|string',
            'url_gmap' => 'required|string'
        ]);

        $place = place::create([
            'id_category' => $request->id_category,
            'id_user' => Auth::user()->id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'open_time' => $request->open_time,
            'description' => $request->description,
            'url_gmap' => $request->url_gmap
        ]);

        $response = fractal()
            ->item($place)
            ->transformWith(new PlaceTransformer)
            ->toArray();

        return response()->json($response, 201);
    }

    public function show()
    {
        $user = Auth::user()->id;
        // $place = place::where('id_user', 8);
        $place = place::where('id_user', $user)->get();
        // $place = place::all();

        return fractal()
            ->collection($place)
            ->transformWith(new PlaceTransformer)
            ->toArray();
    }
}
