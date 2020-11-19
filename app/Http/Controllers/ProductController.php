<?php

namespace App\Http\Controllers;

use App\Transformers\ProductTransformer;
use App\Transformers\PlaceTransformer;
use Illuminate\Http\Request;
use App\product;
use App\place;

class ProductController extends Controller
{
    public function foodsRandom()
    {
        // $foods = product::where('id_category', 1)->get()->random(3);
        $foods = product::where('id_category', 1)
            ->orderBy('counter', 'desc')
            ->take(3)
            ->get();

        return fractal()
            ->collection($foods)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }

    public function craftsRandom()
    {
        $crafts = product::where('id_category', 2)
            ->orderBy('counter', 'desc')
            ->take(3)
            ->get();

        return fractal()
            ->collection($crafts)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }

    public function travelsRandom()
    {
        $travels = place::where('id_category', 3)
            ->orderBy('counter', 'desc')
            ->take(3)
            ->get();

        return fractal()
            ->collection($travels)
            ->transformWith(new PlaceTransformer)
            ->toArray();
    }
}
