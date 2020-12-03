<?php

namespace App\Http\Controllers;

use App\Transformers\SubcategoryTransformer;
use Illuminate\Http\Request;
use App\subCategory;

class SubcategoryController extends Controller
{
    public function subcategoryFoods()      //Menampilkan daftar sub kategori dalam kategori kuliner (Dashboard per Kategori)
    {
        $sub_category = subCategory::where('category_id', 1)->get();

        $response = fractal()
            ->collection($sub_category)
            ->transformWith(new SubcategoryTransformer)
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

    public function subcategoryCrafts()      //Menampilkan daftar sub kategori dalam kategori kerajinan (Dashboard per Kategori)
    {
        $sub_category = subCategory::where('category_id', 2)->get();

        $response = fractal()
            ->collection($sub_category)
            ->transformWith(new SubcategoryTransformer)
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

    public function subcategoryTravels()      //Menampilkan daftar sub kategori dalam kategori kerajinan (Dashboard per Kategori)
    {
        $sub_category = subCategory::where('category_id', 3)->get();

        $response = fractal()
            ->collection($sub_category)
            ->transformWith(new SubcategoryTransformer)
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
