<?php

namespace App\Transformers;

use App\product;
use League\Fractal\TransformerAbstract;


class ProductTransformer extends TransformerAbstract
{
    public function transform(product $product)
    {
        return [
            'id' => $product->id,
            'place_id' => $product->place_id,
            'category_id' => $product->category_id,
            'subcategory_id' => $product->subcategory_id,
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->description,
            'image' => $product->image,
            'is_active' => $product->is_active,
            'is_order' => $product->is_order,
            'counter' => $product->counter,
            'rating' => $product->rating,
            'registered' => $product->created_at->diffForHumans(),
        ];
    }
}