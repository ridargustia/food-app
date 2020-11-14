<?php

namespace App\Http\Controllers;

use App\Transformers\ProductTransformer;
use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function foodsRandom()
    {
        // $foods = product::where('id_category', 1)->random(10);
        $foods = product::where('id_category', 1)->get()->random(5);

        return fractal()
            ->collection($foods)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }
}
