<?php

namespace App\Http\Controllers;

use App\Transformers\ArticleTransformer;
use Illuminate\Http\Request;
use App\article;

class ArticleController extends Controller
{
    public function index()     //Menampilkan daftar artikel secara random (Dashboard utama)
    {
        $articles = article::all()->random(1);

        $response = fractal()
            ->collection($articles)
            ->transformWith(new ArticleTransformer)
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
