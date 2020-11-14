<?php

namespace App\Http\Controllers;

use App\Transformers\ProductTransformer;
use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function foodsRandom()
    {
        $foods = product::where('id_category', 1)->get()->random(3);

        return fractal()
            ->collection($foods)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }

    public function craftsRandom()
    {
        $crafts = product::where('id_category', 2)->get()->random(3);

        return fractal()
            ->collection($crafts)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }

    public function travelsRandom()
    {
        $travels = product::where('id_category', 3)->get()->random(3);

        return fractal()
            ->collection($travels)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }
}
