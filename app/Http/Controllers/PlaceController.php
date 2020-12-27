<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\PlaceTransformer;
use App\place;
use Auth;


class PlaceController extends Controller
{
    public function foodPlaces()        //Menampilkan daftar tempat makan yg memiliki counter terbanyak (Dashboard per kategori)
    {
        $places = place::where('category_id', 1)
            ->orderBy('counter', 'desc')
            ->take(10)
            ->get();

        $response = fractal()
            ->collection($places)
            ->transformWith(new PlaceTransformer)
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

    public function craftPlaces()        //Menampilkan daftar tempat kerajinan yg memiliki counter terbanyak (Dashboard per kategori)
    {
        $places = place::where('category_id', 2)
            ->orderBy('counter', 'desc')
            ->take(10)
            ->get();

        $response = fractal()
            ->collection($places)
            ->transformWith(new PlaceTransformer)
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

    public function travelPlaces()      //Menampilkan daftar tempat wisata dengan counter terbanyak (Dashboard per kategori)
    {
        $places = place::where('category_id', 3)
            ->orderBy('counter', 'desc')
            ->take(10)
            ->get();

        $response = fractal()
            ->collection($places)
            ->transformWith(new PlaceTransformer)
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

    public function search(Request $request)    //Menampilkan daftar place dengan fitur pencarian(search) 
    {
        // if($request->has('search')){
        if($request->search != null){
            $results = place::where('name', 'LIKE', '%'.$request->search.'%')->get();

        }else{
            $results = place::orderBy('counter', 'desc')
                ->take(10)
                ->get();
        }

        $count = $results->count();
        if($count > 0){
            $message = 'Request is successful.';
        }else{
            $message = 'Not found.';
        }

        $response = fractal()
            ->collection($results)
            ->transformWith(new PlaceTransformer)
            ->toArray();

        if($response)
        {
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $response
            ], 200);
        }
    }

    public function detailPlaceById(place $place, $id) //Menampilkan detail place by id dan include product di dalamnya
    {
        $place = $place->find($id);

        $response = fractal()
            ->item($place)
            ->transformWith(new PlaceTransformer)
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

    public function placesRandom()   //Menampilkan daftar places secara random sebanyak 4 data (Explore)
    {
        $places = place::all()->random(4);

        $response = fractal()
            ->collection($places)
            ->transformWith(new PlaceTransformer)
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

    public function travelsPlaceRandom()    //Menampilkan daftar places wisata secara random sebanyak 20 data (Explore)
    {
        $places = place::where('category_id', 3)
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $response = fractal()
            ->collection($places)
            ->transformWith(new PlaceTransformer)
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

    public function placesNonTravel()   //Menampilkan daftar places non wisata secara random sebanyak 20 data (explore)
    {
        $places = place::where('category_id', '!=', 3)
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $response = fractal()
            ->collection($places)
            ->transformWith(new PlaceTransformer)
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

    public function add(Request $request)       //POST data place
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'open_time' => 'required|string',
            'description' => 'required|string',
            'url_gmap' => 'required|string'
        ]);

        $place = place::create([
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
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

    public function show()          //Menampilkan detail place
    {
        $user = Auth::user()->id;
        // $place = place::where('id_user', 8);
        $place = place::where('user_id', $user)->get();
        // $place = place::all();

        return fractal()
            ->collection($place)
            ->transformWith(new PlaceTransformer)
            ->toArray();
    }
}
