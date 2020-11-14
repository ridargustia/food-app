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
            'id_place' => $product->id_place,
            'id_category' => $product->id_category,
            'id_subcategory' => $product->id_subcategory,
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