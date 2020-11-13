<?php

namespace App\Http\Controllers;

use App\Transformers\CategoryTransformer;
use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::all();

        return fractal()
            ->collection($categories)
            ->transformWith(new CategoryTransformer)
            ->toArray();
    }
}
