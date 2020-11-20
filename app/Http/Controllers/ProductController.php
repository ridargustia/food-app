<?php

namespace App\Http\Controllers;

use App\Transformers\ProductTransformer;
use App\Transformers\PlaceTransformer;
use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function foodsRandom()       //Menampilkan data produk kuliner dengan counter terbanyak (Dashboard utama, Dashboard per kategori)
    {
        // $foods = product::where('id_category', 1)->get()->random(3);
        $foods = product::where('id_category', 1)
            ->orderBy('counter', 'desc')
            ->take(3)
            ->get();

        $response = fractal()
            ->collection($foods)
            ->transformWith(new ProductTransformer)
            ->toArray();

        if($response){
            return response()->json([
                'success' => true,
                'message' => 'Request is successful.',
                'data' => $response
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Request failed.'
            ], 404);
        }
    }

    public function craftsRandom()      //Menampilkan data produk kerajinan dengan counter terbanyak (Dashboard utama, Dashboard per kategori)
    {
        $crafts = product::where('id_category', 2)
            ->orderBy('counter', 'desc')
            ->take(3)
            ->get();

        $response = fractal()
            ->collection($crafts)
            ->transformWith(new ProductTransformer)
            ->toArray();

        return response()->json($response, 200);
    }

    public function travelsRandom()      //Menampilkan data produk/spot wisata dengan counter terbanyak (Dashboard per kategori)
    {
        $travels = product::where('id_category', 3)
            ->orderBy('counter', 'desc')
            ->take(3)
            ->get();

        $response = fractal()
            ->collection($travels)
            ->transformWith(new ProductTransformer)
            ->toArray();

        return response()->json($response, 200);
    }

}
