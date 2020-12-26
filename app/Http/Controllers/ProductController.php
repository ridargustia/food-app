<?php

namespace App\Http\Controllers;

use App\Transformers\SubcategoryTransformer;
use App\Transformers\ProductTransformer;
use App\Transformers\PlaceTransformer;
use Illuminate\Http\Request;
use App\subCategory;
use App\product;
use App\place;

class ProductController extends Controller
{
    public function foodsRandom()       //Menampilkan data produk kuliner dengan counter terbanyak (Dashboard utama, Dashboard per kategori)
    {
        // $foods = product::where('id_category', 1)->get()->random(3);
        $foods = product::where('category_id', 1)
            ->orderBy('counter', 'desc')
            ->take(10)
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
        $crafts = product::where('category_id', 2)
            ->orderBy('counter', 'desc')
            ->take(10)
            ->get();

        $response = fractal()
            ->collection($crafts)
            ->transformWith(new ProductTransformer)
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

    public function travelsRandom()      //Menampilkan data produk/spot wisata dengan counter terbanyak (Dashboard per kategori)
    {
        $travels = product::where('category_id', 3)
            ->orderBy('counter', 'desc')
            ->take(10)
            ->get();

        $response = fractal()
            ->collection($travels)
            ->transformWith(new ProductTransformer)
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

    public function search(Request $request)    //Menampilkan daftar product dengan fitur pencarian(search) 
    {
        // if($request->has('search')){
        if($request->search != null){
            $results = product::where('name', 'LIKE', '%'.$request->search.'%')->get();

        }else{
            $results = product::orderBy('counter', 'desc')
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
            ->transformWith(new ProductTransformer)
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

    public function detailProductById(product $product, $id)    //Menampilkan detail product by id dengan place terkait dan products lain yang terkait
    {
        $product = $product->find($id);

        $subCategory = subCategory::where('id', $product->subcategory_id)->get();

        $place = place::where('id', $product->place_id)->get()->first();
        
        $products = product::where('place_id', $place->id)
            ->where('id', '!=', $id)
            ->take(10)
            ->get();
        
        $responseProduct = fractal()
            ->item($product)
            ->transformWith(new ProductTransformer)
            ->toArray();

        $responseSubcategory = fractal()
            ->collection($subCategory)
            ->transformWith(new SubcategoryTransformer)
            ->toArray();

        $responsePlace = fractal()
            ->item($place)
            ->transformWith(new PlaceTransformer)
            ->toArray();

        $responseOtherProducts = fractal()
            ->collection($products)
            ->transformWith(new ProductTransformer)
            ->toArray();

        if($responseProduct && $responseSubcategory && $responsePlace && $responseOtherProducts)
        {
            return response()->json([
                'success' => true,
                'message' => 'Request is successful.',
                'product' => $responseProduct,
                'subcategory' => $responseSubcategory,
                'place' => $responsePlace,
                'otherproducts' => $responseOtherProducts
            ], 200);
        }
    }

    public function productsRandom()    //Menampilkan product/spot random sebanyak 20 data (explore)
    {
        //$products = product::where('category_id', 2)->inRandomOrder()->limit(10)->get(); //Random with where limit 10
        $products = product::all()->random(20);

        $response = fractal()
            ->collection($products)
            ->transformWith(new ProductTransformer)
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

    public function productsNonSpot()   //Menampilkan daftar products selain spot wisata secara random sebanyak 20 data (Explore)
    {
        $products = product::where('category_id', '!=', 3)
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $response = fractal()
            ->collection($products)
            ->transformWith(new ProductTransformer)
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
